<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use App\Models\Vendeur;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function index()
    {
        $terrains = Terrain::all();
        return view('terrains.index', compact('terrains'));
    }

    public function create()
    {
        $vendeurs = Vendeur::all();
        return view('terrains.create', compact('vendeurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'typeTerrain' => 'required|string',
            'prixvente' => 'required|numeric',
            'cinv' => 'required|string',
            'titre_foncier' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'superficie' => 'required|numeric',
        ]);

        Terrain::create($request->all());
        return redirect()->route('terrains.index')->with('success', 'Terrain created successfully');
    }

    public function edit($numter)
    {
        $terrain = Terrain::findOrFail($numter);
        $vendeurs = Vendeur::all();
        return view('terrains.edit', compact('terrain', 'vendeurs'));
    }

    public function update(Request $request, $numter)
    {
        $request->validate([
            'typeTerrain' => 'required|string',
            'prixvente' => 'required|numeric',
            'cinv' => 'required|string',
            'titre_foncier' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'superficie' => 'required|numeric',
        ]);

        $terrain = Terrain::findOrFail($numter);
        $terrain->update($request->all());

        return redirect()->route('terrains.index')->with('success', 'Terrain updated successfully');
    }

    public function destroy($numter)
    {
        $terrain = Terrain::findOrFail($numter);
        $terrain->delete();
        return redirect()->route('terrains.index')->with('success', 'Terrain deleted successfully');
    }
}
