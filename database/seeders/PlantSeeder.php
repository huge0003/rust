<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vezelgewassen
        Plant::create([
            'type' => 'Vezelgewassen',
            'name' => 'Miscanthus'
        ]);
        Plant::create([
            'type' => 'Vezelgewassen',
            'name' => 'Hennep'
        ]);
        Plant::create([
            'type' => 'Vezelgewassen',
            'name' => 'Sida'
        ]);

        // Oliehoudend
        Plant::create([
            'type' => 'Oliehoudend',
            'name' => 'Zwarte mosterd'
        ]);
        Plant::create([
            'type' => 'Oliehoudend',
            'name' => 'Gele mosterd'
        ]);
        Plant::create([
            'type' => 'Oliehoudend',
            'name' => 'Ethiopische mosterd'
        ]);

        // Knolgewassen
        Plant::create([
            'type' => 'Knolgewassen',
            'name' => 'Yacon'
        ]);
        Plant::create([
            'type' => 'Knolgewassen',
            'name' => 'Oca'
        ]);
        Plant::create([
            'type' => 'Knolgewassen',
            'name' => 'Mashua'
        ]);

        // Veevoer
        Plant::create([
            'type' => 'Veevoer',
            'name' => 'Espargette'
        ]);
        Plant::create([
            'type' => 'Veevoer',
            'name' => 'Mais'
        ]);
        Plant::create([
            'type' => 'Veevoer',
            'name' => 'Sorghum'
        ]);

        // Biociden
        Plant::create([
            'type' => 'Biociden',
            'name' => 'Boerenwormkruid'
        ]);
        Plant::create([
            'type' => 'Biociden',
            'name' => 'Pyrethrum'
        ]);
        Plant::create([
            'type' => 'Biociden',
            'name' => 'Bijvoet'
        ]);

        // Newfood
        Plant::create([
            'type' => 'Newfood',
            'name' => 'Amaranth'
        ]);
        Plant::create([
            'type' => 'Newfood',
            'name' => 'Haver'
        ]);
        Plant::create([
            'type' => 'Newfood',
            'name' => 'Quinoa'
        ]);

        // Kleurstoffen
        Plant::create([
            'type' => 'Kleurstoffen',
            'name' => 'Wede'
        ]);
        Plant::create([
            'type' => 'Kleurstoffen',
            'name' => 'Wouw'
        ]);
        Plant::create([
            'type' => 'Kleurstoffen',
            'name' => 'Meekrap'
        ]);
    }
}
