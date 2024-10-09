<?php

namespace Database\Seeders;

use App\Models\TemaWisata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemaWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TemaWisata::create([
            'tema_wisata' => 'Edukasi peternakan'
        ]);
    }
}
