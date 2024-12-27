@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Edit Terrain</h1>
    <form action="{{ route('terrains.update', $terrain->numter) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="typeTerrain" class="block text-sm font-medium text-gray-700">Type of Terrain</label>
            <input type="text" name="typeTerrain" id="typeTerrain" value="{{ old('typeTerrain', $terrain->typeTerrain) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('typeTerrain')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="prixvente" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" name="prixvente" id="prixvente" value="{{ old('prixvente', $terrain->prixvente) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('prixvente')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="cinv" class="block text-sm font-medium text-gray-700">Vendeur</label>
            <select name="cinv" id="cinv" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @foreach($vendeurs as $vendeur)
                    <option value="{{ $vendeur->cinv }}" {{ old('cinv', $terrain->cinv) == $vendeur->cinv ? 'selected' : '' }}>
                        {{ $vendeur->nom }} {{ $vendeur->prenom }}
                    </option>
                @endforeach
            </select>
            @error('cinv')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="titre_foncier" class="block text-sm font-medium text-gray-700">Title of Property</label>
            <input type="text" name="titre_foncier" id="titre_foncier" value="{{ old('titre_foncier', $terrain->titre_foncier) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('titre_foncier')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="adresse" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="adresse" id="adresse" value="{{ old('adresse', $terrain->adresse) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('adresse')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="ville" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" name="ville" id="ville" value="{{ old('ville', $terrain->ville) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('ville')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="superficie" class="block text-sm font-medium text-gray-700">Area </label>
            <input type="number" name="superficie" id="superficie" value="{{ old('superficie', $terrain->superficie) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            @error('superficie')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Terrain</button>
    </form>
</div>
@endsection
