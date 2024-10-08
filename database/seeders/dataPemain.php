<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataPemain extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = ['Forward', 'Midfielder', 'Defender', 'Goalkeeper'];
        for ($i = 0; $i < 5; $i++) {
            Pemain::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(int1: 0, int2: 20),
                'posisi' => fake()->randomElement($positions),
            ]);
        }
    }
}