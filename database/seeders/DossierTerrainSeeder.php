<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DossierTerrain;
use App\Models\Terrain;
use App\Models\Notaire;

class DossierTerrainSeeder extends Seeder
{
    public function run()
    {
        $terrains = Terrain::all();
        $notaires = Notaire::all();

        for ($i = 1; $i <= 20; $i++) {
            DossierTerrain::create([
                'date_ouverture' => now()->subDays(rand(1, 365)),
                'date_cloture' => rand(0, 1) ? now()->addDays(rand(1, 30)) : null,
                'numter' => $terrains->random()->numter,
                'numnotaire' => $notaires->random()->numn,
                'etat' => ['En cours', 'Terminé', 'En attente'][rand(0, 2)],
            ]);
        }
    }
}

