<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cabinet;

class CabinetSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Cabinet::create([
                'nom' => "Cabinet $i",
                'adresse' => "Address $i",
                'tel' => "123-456-78" . str_pad($i, 2, '0', STR_PAD_LEFT),
                'ville' => "City $i",
            ]);
        }
    }
}

