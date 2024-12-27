@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Dossier Terrains</h1>

    <!-- Action Buttons -->
    <div class="flex items-center justify-between mb-4">
        <!-- Left Side: Create Button -->
        <a href="{{ route('dossier-terrains.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Dossier Terrain
        </a>

        <!-- Right Side: PDF and Excel Export Buttons -->
        <div class="space-x-4">
            <a href="{{ route('dossier-terrains.export-pdf') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Download PDF
            </a>
            <a href="{{ route('dossier-terrains.export-ex') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Export to Excel
            </a>
        </div>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('dossier-terrains.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search by ID" class="p-2 border border-gray-300 rounded">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Search
        </button>
    </form>

    <!-- Dossier Terrain Table -->
    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Date Ouverture</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Date Cloture</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Terrain Type</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Notaire</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Etat</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dossierTerrains as $dossierTerrain)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->iddossier }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->date_ouverture }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->date_cloture ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->terrain->typeTerrain ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->notaire->nom ?? 'N/A' }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $dossierTerrain->etat }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <a href="{{ route('dossier-terrains.edit', $dossierTerrain->iddossier) }}" class="text-blue-600 hover:text-blue-900 mr-4">Edit</a>
                        <form action="{{ route('dossier-terrains.destroy', $dossierTerrain->iddossier) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection