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
        Schema::create('tanah', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemilik');
            $table->string('luas');
            $table->string('alamat');
            $table->string('konturTanah');
            $table->string('hak_milik');
            $table->string('listrik');
            $table->string('sumberAir');
            $table->string('koneksiJaringan');
            $table->text('deskripsiTanah');
            $table->string('statusJual');
            $table->string('hargaTanah');
            $table->string('fotoTanah');
            $table->string('fotoDenah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanah');
    }
};
