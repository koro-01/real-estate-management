<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center">Real Estate Management System</h1>
        <nav class="mb-8">
            <ul class="flex flex-wrap justify-center gap-4">
                <li><a href="{{ route('cabinets.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cabinets</a></li>
                <li><a href="{{ route('notaires.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Notaires</a></li>
                <li><a href="{{ route('vendeurs.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Vendeurs</a></li>
                <li><a href="{{ route('terrains.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Terrains</a></li>
                <li><a href="{{ route('dossier-terrains.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dossier Terrains</a></li>
            </ul>
        </nav>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-gray-700 text-base mb-4">Welcome to the Real Estate Management System. Use the navigation above to manage different aspects of the system.</p>
        </div>
    </div>
</body>
</html>

