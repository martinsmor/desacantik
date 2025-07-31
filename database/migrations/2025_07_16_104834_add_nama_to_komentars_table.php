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
        Schema::table('komentars', function (Blueprint $table) {
            $table->string('nama')->default('Pengunjung');
        });
    }

    public function down()
    {
        Schema::table('komentars', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }
};
