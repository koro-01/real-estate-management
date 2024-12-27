@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Edit Cabinet</h1>

        <form action="{{ route('cabinets.update', $cabinet->id_cab) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="nom" id="nom" value="{{ $cabinet->nom }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <input type="text" name="adresse" id="adresse" value="{{ $cabinet->adresse }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="tel" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="text" name="tel" id="tel" value="{{ $cabinet->tel }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-6">
                <label for="ville" class="block text-gray-700 text-sm font-bold mb-2">City</label>
                <input type="text" name="ville" id="ville" value="{{ $cabinet->ville }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Cabinet
                </button>
                <a href="{{ route('cabinets.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

