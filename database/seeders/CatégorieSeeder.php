<?php

namespace Database\Seeders;

use App\Models\Catégorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatégorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catégorie::factory()->count(10)->create();
    }
}
