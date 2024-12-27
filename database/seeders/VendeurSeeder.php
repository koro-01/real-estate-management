<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendeur;

class VendeurSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Vendeur::create([
                'cinv' => "V" . str_pad($i, 8, '0', STR_PAD_LEFT),
                'nom' => "Vendeur Nom $i",
                'prenom' => "Vendeur Prenom $i",
                'adresse' => "Vendeur Address $i",
                'ddn' => now()->subYears(rand(20, 70))->format('Y-m-d'),
                'tel' => "555-123-45" . str_pad($i, 2, '0', STR_PAD_LEFT),
            ]);
        }
    }
}

