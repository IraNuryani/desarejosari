<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programdarwis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id');
            $table->string('program');
            $table->enum('status', ['Rencana', 'Sedang Berjalan', 'Selesai']);
            $table->timestamps('dimulai');
            $table->timestamps('selesai');
            $table->string('lokasi');
            $table->string('luas_area')->nullable();
            $table->string('keterangan');
            $table->integer('jumlah_anggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programdarwis');
    }
};
