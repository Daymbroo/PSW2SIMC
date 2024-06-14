<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_information' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        Message::create($validatedData);

        return redirect('/');
    }

    public function showMessages()
    {
        $messages = Message::all();
        return view('admin.dashboard', compact('messages'));
    }
}
