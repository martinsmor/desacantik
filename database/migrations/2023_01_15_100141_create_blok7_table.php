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
        Schema::create('blok7', function (Blueprint $table) {
            $table->id();
            $table->integer('id_warga');
            $table->string('nomor_urut',20)->nullable();
            $table->string('nama_anggota',100)->nullable();
            $table->string('nik',20)->nullable();
            $table->char('hubungan_keluarga_id',10)->nullable();
            $table->char('keberadaan_id',10)->nullable();
            $table->char('jenis_kelamin_id',10)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('umur',10)->nullable();
            $table->char('agama_id',10)->nullable();
            $table->char('suku_id',10)->nullable();
            $table->char('domisili_id',10)->nullable();
            $table->char('bansos_id',10)->nullable();
            $table->char('status_kawin_id',10)->nullable();
            $table->char('kepemilikan_bukunikah_id',10)->nullable();
            $table->char('KK_id',10)->nullable();
            $table->char('identitas_id',10)->nullable();
            $table->char('kehamilan_id',10)->nullable();
            $table->char('KB_id',10)->nullable();

            $table->char('sekolah_id',10)->nullable();
            $table->char('jenjang_sekolah_id',10)->nullable();
            $table->char('kelas_id',10)->nullable();
            $table->char('ijazah_id',10)->nullable();

            $table->char('pensiunan_id',10)->nullable();
            $table->char('bekerja_id',10)->nullable();
            $table->char('lamabekerja_id',10)->nullable();
            $table->char('pekerjaan_utama_id',10)->nullable();
            $table->char('status_pekerjaan_id',10)->nullable();
            $table->char('NPWP_id',10)->nullable();
            $table->char('transaksi_id',10)->nullable();

            $table->char('usaha_id',10)->nullable();
            $table->string('lapangan_usaha',100)->nullable();
            $table->string('pekerja_dibayar',100)->nullable();
            $table->string('pekerja_tidakdibayar',100)->nullable();
            $table->char('perizinan_usaha_id',10)->nullable();
            $table->string('perizinan_usaha',100)->nullable();
            $table->char('tempat_usaha_id',10)->nullable();
            $table->char('omset_id',10)->nullable();
            $table->char('internet_id',10)->nullable();

            $table->char('cacat_id',10)->nullable();
            $table->char('penyakitkronis_id',10)->nullable();
            $table->char('golongandarah_id',10)->nullable();
            $table->char('kondisigizi_id',10)->nullable();
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
        Schema::dropIfExists('blok7');
    }
};
