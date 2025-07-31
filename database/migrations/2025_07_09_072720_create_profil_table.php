<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profildesa', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');       // UMUM, PERTANAHAN, dll
            $table->string('sub_kategori');   // Peruntukan, Agama, dll
            $table->string('uraian')->unique();         // misal: Jalan, Islam, Masjid, dll
            $table->string('jumlah')->nullable(); // misal: 150
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil');
    }
};
