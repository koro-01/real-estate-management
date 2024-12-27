<?php

namespace App\Http\Controllers;

use App\Models\Vendeur;
use Illuminate\Http\Request;

class VendeurController extends Controller
{
    public function index()
    {
        $vendeurs = Vendeur::all();
        return view('vendeurs.index', compact('vendeurs'));
    }

    public function create()
    {
        return view('vendeurs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cinv' => 'required|unique:vendeurs',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'ddn' => 'required|date',
            'tel' => 'required',
        ]);

        Vendeur::create($request->all());

        return redirect()->route('vendeurs.index')->with('success', 'Vendeur created successfully.');
    }

    public function show($cinv)
    {
        $vendeur = Vendeur::findOrFail($cinv);
        return view('vendeurs.show', compact('vendeur'));
    }

    public function edit($cinv)
    {
        $vendeur = Vendeur::findOrFail($cinv);
        return view('vendeurs.edit', compact('vendeur'));
    }

    public function update(Request $request, $cinv)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'ddn' => 'required|date',
            'tel' => 'required',
        ]);

        $vendeur = Vendeur::findOrFail($cinv);
        $vendeur->update($request->all());

        return redirect()->route('vendeurs.index')->with('success', 'Vendeur updated successfully.');
    }

    public function destroy($cinv)
    {
        $vendeur = Vendeur::findOrFail($cinv);
        $vendeur->delete();

        return redirect()->route('vendeurs.index')->with('success', 'Vendeur deleted successfully.');
    }
}
