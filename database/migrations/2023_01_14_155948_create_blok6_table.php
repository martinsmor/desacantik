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
        Schema::create('blok6', function (Blueprint $table) {
            $table->id();
            $table->integer('warga_id'); 
            $table->string('nama_lahan',100)->nullable(); 
            $table->char('jenislahan_id',100)->nullable(); 
            $table->char('sppt_id',100)->nullable(); 
            $table->string('nomor_pajak',100)->nullable(); 
            $table->string('luas_lahan',100)->nullable(); 
            $table->char('hakmiliksertif_id',100)->nullable();
            $table->string('nama_hakmilik',100)->nullable();
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
        Schema::dropIfExists('blok6');
    }
};
