@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Add New Vendeur</h1>
    <form action="{{ route('vendeurs.store') }}" method="POST">
        @csrf
        <div class="bg-white shadow-md rounded p-6">
            <div class="mb-4">
                <label for="cinv" class="block text-sm font-medium text-gray-700">CIN</label>
                <input type="text" name="cinv" id="cinv" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" name="nom" id="nom" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="ddn" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
                <input type="date" name="ddn" id="ddn" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="tel" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="tel" id="tel" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Save</button>
            <a href="{{ route('vendeurs.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block ml-4">Back to Vendeurs</a>
        </div>
    </form>
</div>
@endsection
