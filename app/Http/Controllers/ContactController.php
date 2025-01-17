<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        return view('contact.index');
    }

    public function show()
    {
        $contacts = Contact::all();

        return view('contact.show', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route("articles.index")->with('message', 'Votre message a bien été envoyé');
    }
}
