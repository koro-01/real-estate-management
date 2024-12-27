@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Edit Dossier Terrain</h1>

    <form action="{{ route('dossier-terrains.update', $dossierTerrain->iddossier) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Date Ouverture -->
        <div class="mb-4">
            <label for="date_ouverture" class="block text-sm font-medium text-gray-700">Date Ouverture</label>
            <input type="date" name="date_ouverture" id="date_ouverture" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ old('date_ouverture', $dossierTerrain->date_ouverture) }}" required>
        </div>

        <!-- Date Cloture -->
        <div class="mb-4">
            <label for="date_cloture" class="block text-sm font-medium text-gray-700">Date Cloture</label>
            <input type="date" name="date_cloture" id="date_cloture" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ old('date_cloture', $dossierTerrain->date_cloture) }}">
        </div>

        <!-- Terrain -->
        <div class="mb-4">
            <label for="numter" class="block text-sm font-medium text-gray-700">Terrain</label>
            <select name="numter" id="numter" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @foreach($terrains as $terrain)
                    <option value="{{ $terrain->numter }}" {{ $terrain->numter == $dossierTerrain->numter ? 'selected' : '' }}>
                        {{ $terrain->typeTerrain }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Notaire -->
        <div class="mb-4">
            <label for="numnotaire" class="block text-sm font-medium text-gray-700">Notaire</label>
            <select name="numnotaire" id="numnotaire" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @foreach($notaires as $notaire)
                    <option value="{{ $notaire->numn }}" {{ $notaire->numn == $dossierTerrain->numnotaire ? 'selected' : '' }}>
                        {{ $notaire->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Etat -->
        <div class="mb-4">
            <label for="etat" class="block text-sm font-medium text-gray-700">Etat</label>
            <input type="text" name="etat" id="etat" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ old('etat', $dossierTerrain->etat) }}" required>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update DossierTerrain</button>
    </form>
</div>
@endsection
