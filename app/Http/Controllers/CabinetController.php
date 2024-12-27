<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use Illuminate\Http\Request;



class CabinetController extends Controller
{
    public function index()
    {
        $cabinets = Cabinet::all();
        return view('cabinets.index', compact('cabinets'));
    }


    public function create()
    {
        return view('cabinets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'ville' => 'required',
        ]);

        Cabinet::create($validated);
        return redirect()->route('cabinets.index')->with('success', 'Cabinet created successfully.');
    }

    public function edit(Cabinet $cabinet)
    {
        return view('cabinets.edit', compact('cabinet'));
    }

    public function update(Request $request, Cabinet $cabinet)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'ville' => 'required',
        ]);

        $cabinet->update($validated);
        return redirect()->route('cabinets.index')->with('success', 'Cabinet updated successfully.');
    }

    public function destroy(Cabinet $cabinet)
    {
        $cabinet->delete();
        return redirect()->route('cabinets.index')->with('success', 'Cabinet deleted successfully.');
    }


   

}

