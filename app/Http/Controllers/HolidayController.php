<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $holidays = Holiday::latest()->get();
        return view('pages/holidays.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/holidays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255|unique:' . Holiday::class,
            'date' => 'required|date',
            'email_template.title' => 'required|string|max:255',
            'email_template.body' => 'required|string',
        ]);

        $holiday = Holiday::create($attributes);
        Log::info("Created Holiday " . $holiday);
        return redirect()->route('holidays.index')->with('success', 'Holiday created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Holiday $holiday)
    {
        return view('pages/holidays.edit', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Holiday $holiday)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:holidays,name,' . $holiday->name],
            'date' => 'required|date',
            'email_template.title' => 'required|string|max:255',
            'email_template.body' => 'required|string',
        ]);

        $saving = $holiday->update($attributes);

        return redirect()->route('holidays.index')->with('success', 'Holiday updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return redirect()->route('holidays.index')->with('success', 'Holiday deleted successfully.');
    }
}
