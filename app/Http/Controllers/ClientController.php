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
        $clients = Client::latest()->simplePaginate(10);
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
            'email' => 'required|string|lowercase|email|max:255|unique:'.Client::class,
            'birthday' => ['required'],
        ]);

        $client = Client::create($attributes);

        Mail::to($client)->queue(
            new WelcomeClient($client)
        );

        return redirect('/clients');
    }

    public function show(Client $client)
    {
        return view('pages/clients.show', ['client' => $client]);
    }
}
