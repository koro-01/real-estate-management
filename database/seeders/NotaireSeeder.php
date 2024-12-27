<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notaire;
use App\Models\Cabinet;

class NotaireSeeder extends Seeder
{
    public function run()
    {
        $cabinets = Cabinet::all();

        for ($i = 1; $i <= 20; $i++) {
            Notaire::create([
                'nom' => "Notaire Nom $i",
                'prenom' => "Notaire Prenom $i",
                'age' => rand(30, 70),
                'tel' => "987-654-32" . str_pad($i, 2, '0', STR_PAD_LEFT),
                'email' => "notaire$i@example.com",
                'id_cab' => $cabinets->random()->id_cab,
            ]);
        }
    }
}

