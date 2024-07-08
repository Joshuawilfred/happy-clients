<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeClient;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('pages/clients.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('pages/clients.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => 'required|string|lowercase|email|max:255|unique:' . Client::class,
            'birthday' => ['required'],
        ]);

        $client = Client::create($attributes);

        // Welcoming a client, if at all neccessary 😒
        // Mail::to($client)->queue(
        //     new WelcomeClient($client)
        // );

        return redirect('/clients');
    }

    public function show(Client $client)
    {
        return view('pages/clients.show', ['client' => $client]);
    }

    public function edit(Client $client)
    {
        return view('pages/clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:clients,email,' . $client->id],
            'birthday' => ['required'],
        ]);

        $saving = $client->update($attributes);

        return redirect()->route('clients.index')->with('success', 'client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'client deleted successfully.');
    }
}
