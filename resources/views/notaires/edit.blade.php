@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Notaire</h1>

    <form action="{{ route('notaires.update', $notaire->numn) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
            <input type="text" name="nom" id="nom" value="{{ $notaire->nom }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
            <input type="text" name="prenom" id="prenom" value="{{ $notaire->prenom }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age</label>
            <input type="number" name="age" id="age" value="{{ $notaire->age }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="tel" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
            <input type="text" name="tel" id="tel" value="{{ $notaire->tel }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ $notaire->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-6">
            <label for="id_cab" class="block text-gray-700 text-sm font-bold mb-2">Cabinet</label>
            <select name="id_cab" id="id_cab" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @foreach($cabinets as $cabinet)
                <option value="{{ $cabinet->id_cab }}" {{ $cabinet->id_cab == $notaire->id_cab ? 'selected' : '' }}>{{ $cabinet->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Notaire
            </button>
            <a href="{{ route('notaires.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
        </div>
    </form>
</div>
@endsection
