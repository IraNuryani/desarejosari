<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bidang;
use App\Models\Status;
use App\Models\TemaWisata;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Programdarwis;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    User::create([
        'email' => 'iranuryani@gmail.com',
        'password' => 'qwertyuiop'
    ]);

    Bidang::create([
        'bidang_program' => 'Pelaksanaan Pembangunan'
    ]);

    Bidang::create([
        'bidang_program' => 'Pembinaan Masyarakat'
    ]);

    Bidang::create([
        'bidang_program' => 'Pemberdayaan Masyarakat'
    ]);

    Status::create([
        'status' => 'Rencana'
    ]);

    Status::create([
        'status' => 'Sedang Berjalan'
    ]);

    Status::create([
        'status' => 'Selesai'
    ]);

    Programdarwis::create([
            'bidang_id' => 1,
            'program' => 'Pembangunan jalan wisata',
            'tahun' => '2024',
            'status' => 'Rencana',
            'dimulai' => '2023-12-12',
            'selesai' => '2024-10-10',
            'lokasi' => 'Kalikebo',
            'luas_area' => '2 KM',
            'keterangan' => 'Pembangunan jalan yang digunakan untuk menuju tempat wisata Gumuk Setri',
            'jumlah_anggaran' => 80000000
    ]);

    Programdarwis::create([
        'bidang_id' => 2,
        'program' => 'sosialisasi',
        'tahun' => '2024',
        'status' => 'Selesai',
        'dimulai' => '2023-12-12',
        'selesai' => '2024-10-10',
        'lokasi' => 'Balaidesa',
        'luas_area' => '3',
        'keterangan' => 'Sosialisasi untuk membuat paket wisata',
        'jumlah_anggaran' => 200000
]);
    Programdarwis::create([
        'bidang_id' => 1,
        'program' => 'Pembangunan jalan wisata',
        'tahun' => '2024',
        'status' => 'Rencana',
        'dimulai' => '2023-12-12',
        'selesai' => '2024-10-10',
        'lokasi' => 'Kedon',
        'luas_area' => '5 KM',
        'keterangan' => 'Pembangunan jalan yang digunakan untuk menuju tempat wisata kebun durian',
        'jumlah_anggaran' => 150000000
]);

    TemaWisata::create([
    'tema_wisata' => 'Edukasi peternakan'
]);

    }
}
