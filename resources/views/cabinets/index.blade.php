@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Cabinets</h1>
    <a href="{{ route('cabinets.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add New Cabinet</a>
    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">City</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cabinets as $cabinet)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $cabinet->nom }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $cabinet->adresse }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $cabinet->tel }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $cabinet->ville }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <a href="{{ route('cabinets.edit', $cabinet->id_cab) }}" class="text-blue-600 hover:text-blue-900 mr-4">Edit</a>
                        <form action="{{ route('cabinets.destroy', $cabinet->id_cab) }}" method="POST" class="inline">
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
