<?php

// app/Http/Controllers/NoteController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    // Show the form
    public function create()
    {
        return view('notes.create');
    }

    // Store the note in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        // Create a new note
        Note::create([
            'text' => $request->text,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Note added successfully!');
    }

    public function index()
    {
        // Retrieve all notes from the database
        $notes = Note::all();

        // Return the view and pass the notes to it
        return view('notes.index', ['notes' => $notes]);
    }
}
