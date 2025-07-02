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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->char('provinsi_id',10)->nullable();
            $table->char('kabupaten_id',10)->nullable();
            $table->char('kecamatan_id',100)->nullable();
            $table->char('desa_kel_id',100)->nullable();
            $table->char('klasifikasi_id',100)->nullable();
            $table->string('nama_dusun',100)->nullable();
            $table->string('kode_sls',100)->nullable();
            $table->string('nama_sls',100)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('lattitude',100)->nullable();
            $table->char('jenis_lintang_id',100)->nullable();
            $table->string('longitude',100)->nullable();
            $table->string('nubtt',100)->nullable();
            $table->string('no_kk',100)->nullable();
            $table->string('nukhp',100)->nullable();
            $table->string('kepala_keluarga',100)->nullable();
            $table->string('jumlah_anggota',100)->nullable();
           
            $table->date('tanggal_cacah')->nullable();
            $table->string('nama_cacah',100)->nullable();
            $table->string('kode_cacah',100)->nullable();
            $table->date('tgl_periksa')->nullable();
            $table->string('nama_periksa',100)->nullable();
            $table->string('kode_periksa',100)->nullable();
            $table->char('hasilcacah_id',100)->nullable();
           
            $table->char('kepemilikan_a_id',100)->nullable();
            $table->char('kepemilikan_b_id',100)->nullable();
            $table->string('luas_lantai',100)->nullable();
            $table->char('jenislantai_id',100)->nullable();
            $table->char('jenis_dinding_id',100)->nullable();
            $table->char('kondisi_dinding_id',100)->nullable();
            $table->char('jenis_atap_id',100)->nullable();
            $table->char('kondisi_atap_id',100)->nullable();
            $table->string('jumlah_kamar',100)->nullable();
            $table->char('sumber_minum_id',100)->nullable();
            $table->char('peroleh_minum_id',100)->nullable();
            $table->char('penerangan_id',100)->nullable();
            $table->char('daya_id',100)->nullable();
            $table->char('bahanmasak_id',100)->nullable();
            $table->char('fasilitasmasak_id',100)->nullable();
            $table->char('kloset_id',100)->nullable();
            $table->char('tpa_id',100)->nullable();
            
            $table->string('pekerjaan',100)->nullable();
            $table->string('kode_lapangan_usaha',100)->nullable();
            $table->string('pendapatan',100)->nullable();
           
            $table->char('gas_id',10)->nullable();
            $table->char('lemari_id',10)->nullable();
            $table->char('ac_id',10)->nullable();
            $table->char('pemanas_id',10)->nullable();
            $table->char('pstn_id',10)->nullable();
            $table->char('tv_id',10)->nullable();
            $table->char('emas_id',10)->nullable();
            $table->char('laptop_id',10)->nullable();
            $table->char('sepeda_id',10)->nullable();
            $table->char('motor_id',10)->nullable();
            $table->char('mobil_id',10)->nullable();
            $table->char('perahu_id',10)->nullable();
            $table->char('motortempel_id',10)->nullable();
            $table->char('perahumotor_id',10)->nullable();
            $table->char('kapal_id',10)->nullable();
            $table->string('nomor_hp',20)->nullable();
            $table->string('jumlah_tv',10)->nullable();
            $table->char('lahan_id',10)->nullable();
            $table->string('lahan_meter',100)->nullable();
            $table->char('rumahlain_id',10)->nullable();            
            $table->string('sapi',100)->nullable();
            $table->string('kerbau',100)->nullable();
            $table->string('kuda',100)->nullable();
            $table->string('babi',100)->nullable();
            $table->string('kambing',100)->nullable();
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
        Schema::dropIfExists('warga');
    }
};
