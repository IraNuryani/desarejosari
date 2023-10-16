<?php

namespace Database\Seeders;

use App\Models\Bidang;
use App\Models\Status;
use App\Models\Programdarwis;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

    }
}
