<!DOCTYPE html>
<html>
<head>
    <title>Dossier Terrains</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dossier Terrains</h1>
    <table> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Date Ouverture</th>
                <th>Date Cloture</th>
                <th>Terrain</th>
                <th>Notaire</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dossierTerrains as $dossier)
            <tr>
                <td>{{ $dossier->iddossier }}</td>
                <td>{{ $dossier->date_ouverture?? 'N/A' }}</td>
                <td>{{ $dossier->date_cloture?? 'N/A'  }}</td>
                <td>{{ $dossier->terrain->typeTerrain ?? 'N/A' }}</td>
                <td>{{ $dossier->notaire->name ?? 'N/A' }}</td>
                <td>{{ $dossier->etat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
