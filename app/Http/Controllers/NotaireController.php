<?php

namespace App\Http\Controllers;

use App\Models\Notaire;
use App\Models\Cabinet;
use Illuminate\Http\Request;

class NotaireController extends Controller
{
    // Display all notaires
    public function index()
    {
        $notaires = Notaire::all();
        return view('notaires.index', compact('notaires'));
    }

    // Show form to create a new notaire
    public function create()
    {
        $cabinets = Cabinet::all();  // Retrieve all cabinets for the dropdown
        return view('notaires.create', compact('cabinets'));
    }

    // Store a new notaire
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required|integer',
            'tel' => 'required',
            'email' => 'required|email',
            'id_cab' => 'required|exists:cabinets,id_cab',  // Ensure the cabinet ID exists
        ]);

        Notaire::create($validated);
        return redirect()->route('notaires.index')->with('success', 'Notaire created successfully.');
    }

    // Show form to edit a notaire
    public function edit(Notaire $notaire)
    {
        $cabinets = Cabinet::all();  // Retrieve all cabinets for the dropdown
        return view('notaires.edit', compact('notaire', 'cabinets'));
    }

    // Update an existing notaire
    public function update(Request $request, Notaire $notaire)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required|integer',
            'tel' => 'required',
            'email' => 'required|email',
            'id_cab' => 'required|exists:cabinets,id_cab',
        ]);

        $notaire->update($validated);
        return redirect()->route('notaires.index')->with('success', 'Notaire updated successfully.');
    }

    // Delete a notaire
    public function destroy(Notaire $notaire)
    {
        $notaire->delete();
        return redirect()->route('notaires.index')->with('success', 'Notaire deleted successfully.');
    }
}
