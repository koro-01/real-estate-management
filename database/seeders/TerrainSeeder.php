<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Terrain;
use App\Models\Vendeur;

class TerrainSeeder extends Seeder
{
    public function run()
    {
        $vendeurs = Vendeur::all();

        for ($i = 1; $i <= 20; $i++) {
            Terrain::create([
                'typeTerrain' => ['Residential', 'Commercial', 'Agricultural'][rand(0, 2)],
                'prixvente' => rand(50000, 1000000),
                'cinv' => $vendeurs->random()->cinv,
                'titre_foncier' => "TF" . str_pad($i, 6, '0', STR_PAD_LEFT),
                'adresse' => "Terrain Address $i",
                'ville' => "Terrain City $i",
                'superficie' => rand(100, 10000),
            ]);
        }
    }
}

