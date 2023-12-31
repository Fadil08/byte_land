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
        Schema::create('pemilik', function (Blueprint $table) {
            $table->id();
            $table->string('namaPemilik');
            $table->string('nomerTelpon');
            $table->string('alamat');
            $table->text('deskripsiDiri');
            $table->string('fotoProfile');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik');
    }
};
