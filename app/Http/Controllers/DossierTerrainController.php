<?php

namespace App\Http\Controllers;

use App\Models\DossierTerrain;
use App\Models\Terrain;
use App\Models\Notaire;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DossierTerrainExport;


class DossierTerrainController extends Controller
{

    public function exportEX() 
    {
        return Excel::download(new DossierTerrainExport, 'dossier_terrains.xlsx');
    }

    public function index(Request $request)
    {
        $query = DossierTerrain::query();

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $query->where('iddossier', 'like', '%' . $request->search . '%');
        }

        $dossierTerrains = $query->get();

        return view('dossier-terrains.index', compact('dossierTerrains'));
    }

    public function create()
    {
        $terrains = Terrain::all();
        $notaires = Notaire::all();
        return view('dossier-terrains.create', compact('terrains', 'notaires'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_ouverture' => 'required|date',
            'date_cloture' => 'nullable|date',
            'numter' => 'required|exists:terrains,numter',
            'numnotaire' => 'required|exists:notaires,numn',
            'etat' => 'required|string',
        ]);

        DossierTerrain::create($request->all());

        return redirect()->route('dossier-terrains.index')->with('success', 'DossierTerrain created successfully');
    }

    public function edit($iddossier)
    {
        $dossierTerrain = DossierTerrain::findOrFail($iddossier);
        $terrains = Terrain::all();
        $notaires = Notaire::all();

        return view('dossier-terrains.edit', compact('dossierTerrain', 'terrains', 'notaires'));
    }

    public function update(Request $request, $iddossier)
    {
        $request->validate([
            'date_ouverture' => 'required|date',
            'date_cloture' => 'nullable|date',
            'numter' => 'required|exists:terrains,numter',
            'numnotaire' => 'required|exists:notaires,numn',
            'etat' => 'required|string',
        ]);

        $dossierTerrain = DossierTerrain::findOrFail($iddossier);
        $dossierTerrain->update($request->all());

        return redirect()->route('dossier-terrains.index')->with('success', 'DossierTerrain updated successfully');
    }

    public function destroy($iddossier)
    {
        $dossierTerrain = DossierTerrain::findOrFail($iddossier);
        $dossierTerrain->delete();

        return redirect()->route('dossier-terrains.index')->with('success', 'DossierTerrain deleted successfully');
    }


    public function exportPDF()
    {
      $dossierTerrains = DossierTerrain::with(['terrain', 'notaire'])->get();
  
      $pdf = Pdf::loadView('dossier-terrains.pdf', compact('dossierTerrains'));
      return $pdf->download('dossier_terrains.pdf');
  }

}
