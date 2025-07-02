<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    use HasFactory;
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $fillable = 
        [
            'provinsi_id',
            'kabupaten_id',
            'kecamatan_id',
            'desa_kel_id',
            'klasifikasi_id',
            'kode_sls',
            'nama_sls',
            'nama_dusun',
            'kode_sls',
            'nama_sls',
            'alamat',
            'lattitude',
            'jenis_lintang_id',
            'longitude',
            'nubtt',
            'no_kk',
            'nukhp',
            'kepala_keluarga',
            'jumlah_anggota',
            'tanggal_cacah',
            'nama_cacah',
            'kode_cacah',
            'tgl_periksa',
            'nama_periksa',
            'kode_periksa',
            'hasilcacah_id',
            'kepemilikan_a_id',
            'kepemilikan_b_id',
            'luas_lantai',
            'jenislantai_id',
            'jenis_dinding_id',
            'kondisi_dinding_id',
            'jenis_atap_id',
            'kondisi_atap_id',
            'jumlah_kamar',
            'sumber_minum_id',
            'peroleh_minum_id',
            'penerangan_id',
            'daya_id',
            'bahanmasak_id',
            'fasilitasmasak_id',
            'kloset_id',
            'tpa_id',
            'pekerjaan',
            'kode_lapangan_usaha',
            'pendapatan',
            'gas_id',
            'lemari_id',
            'ac_id',
            'pemanas_id',
            'pstn_id',
            'tv_id',
            'emas_id',
            'laptop_id',
            'sepeda_id',
            'motor_id',
            'mobil_id',
            'perahu_id',
            'motortempel_id',
            'perahumotor_id',
            'kapal_id',
            'nomor_hp',
            'jumlah_tv',
            'lahan_id',
            'lahan_meter',
            'rumahlain_id',
            'sapi',
            'kerbau',
            'kuda',
            'babi',
            'kambing',
        ];

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'provinsi_id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(kabupaten::class, 'kabupaten_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class, 'kecamatan_id');
    }

    public function desa_kelurahan()
    {
        return $this->belongsTo(desa_kelurahan::class, 'desa_kel_id');
    }

    public function klasifikasi()
    {
        return $this->belongsTo(klasifikasi::class, 'klasifikasi_id');
    }

    public function jenislintang()
    {
        return $this->belongsTo(jenislintang::class, 'jenis_lintang_id');
    }

    public function hasilcacah()
    {
        return $this->belongsTo(hasilcacah::class, 'hasilcacah_id');
    }

    public function kepemilikan_a()
    {
        return $this->belongsTo(kepemilikan_a::class, 'kepemilikan_a_id');
    }

    public function kepemilikan_b()
    {
        return $this->belongsTo(kepemilikan_b::class, 'kepemilikan_b_id');
    }

    public function jenislantai()
    {
        return $this->belongsTo(jenislantai::class, 'jenislantai_id');
    }
    
    public function jenisdinding()
    {
        return $this->belongsTo(jenisdinding::class, 'jenis_dinding_id');
    }

    public function jenisatap()
    {
        return $this->belongsTo(jenisatap::class, 'jenis_atap_id');
    }

    public function kondisi()
    {
        return $this->belongsTo(kondisidinding::class, 'kondisi_dinding_id');
        return $this->belongsTo(kondisi::class, 'kondisi_atap_id');
    }

    public function sumberminum()
    {
        return $this->belongsTo(sumberminum::class, 'sumber_minum_id');
    }

    public function perolehminum()
    {
        return $this->belongsTo(perolehminum::class, 'peroleh_minum_id');
    }

    public function penerangan()
    {
        return $this->belongsTo(sumberpenerangan::class, 'penerangan_id');
    }

    public function daya()
    {
        return $this->belongsTo(daya::class, 'daya_id');
    }

    public function bahanmasak()
    {
        return $this->belongsTo(bahanbakarmasak::class, 'bahanmasak_id');
    }
    
    public function fasilitasmasak()
    {
        return $this->belongsTo(fasilitasmasak::class, 'fasilitasmasak_id');
    }
    
    public function kloset()
    {
        return $this->belongsTo(kloset::class, 'kloset_id');
    }
    
    public function tpa()
    {
        return $this->belongsTo(tpa::class, 'tpa_id');
    }

    public function pilihan()
    {
        return $this->belongsTo(pilihan::class,'gas_id');
        return $this->belongsTo(pilihan::class,'lemari_id');
        return $this->belongsTo(pilihan::class,'ac_id');
        return $this->belongsTo(pilihan::class,'pemanas_id');
        return $this->belongsTo(pilihan::class,'pstn_id');
        return $this->belongsTo(pilihan::class,'tv_id');
        return $this->belongsTo(pilihan::class,'emas_id');
        return $this->belongsTo(pilihan::class,'laptop_id');
        return $this->belongsTo(pilihan::class,'sepeda_id');
        return $this->belongsTo(pilihan::class,'motor_id');
        return $this->belongsTo(pilihan::class,'mobil_id');
        return $this->belongsTo(pilihan::class,'perahu_id');
        return $this->belongsTo(pilihan::class,'motortempel_id');
        return $this->belongsTo(pilihan::class,'perahumotor_id');
        return $this->belongsTo(pilihan::class,'kapal_id');
        return $this->belongsTo(pilihan::class,'lahan_id');
        return $this->belongsTo(pilihan::class,'rumahlain_id');
    }

 /*

    public function keberadaankeluarga()
    {
        return $this->belongsTo(keberadaankeluarga::class, 'keberadaan_id');
    }

    public function jk()
    {
        return $this->belongsTo(jk::class, 'jenis_kelamin_id');
    }

    public function agama()
    {
        return $this->belongsTo(agama::class, 'agama_id');
    }

    public function suku()
    {
        return $this->belongsTo(suku::class, 'suku_id');
    }

    public function domisili()
    {
        return $this->belongsTo(domisili::class, 'domisili_id');
    }

    public function statuskawin()
    {
        return $this->belongsTo(statuskawin::class, 'status_kawin_id');
    }

    public function bukunikah()
    {
        return $this->belongsTo(bukunikah::class, 'kepemilikan_bukunikah_id');
    }

    public function identitas()
    {
        return $this->belongsTo(identitas::class, 'identitas_id');
    }

    public function kb()
    {
        return $this->belongsTo(kb::class, 'KB_id');
    }

    public function pendidikan()
    {
        return $this->belongsTo(pendidikan::class, 'jenjang_sekolah_id');
        return $this->belongsTo(pendidikan::class, 'kelas_id');
        return $this->belongsTo(pendidikan::class, 'ijazah_id');
    }

    public function statuskerja()
    {
        return $this->belongsTo(statuskerja::class, 'status_pekerjaan_id');
    }

    public function npwp()
    {
        return $this->belongsTo(npwp::class, 'NPWP_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class, 'transaksi_id');
    }

    public function lapanganusaha()
    {
        return $this->belongsTo(lapanganusaha::class, 'lapangan_usaha_id');
    }

    public function tempatusaha()
    {
        return $this->belongsTo(lokasiusaha::class, 'tempat_usaha_id');
    }

    public function omset()
    {
        return $this->belongsTo(omset::class, 'omset_id');
    }

    public function internet()
    {
        return $this->belongsTo(internet::class, 'internet_id');
    }

    public function cacat()
    {
        return $this->belongsTo(cacat::class, 'cacat_id');
    }

    

    public function goldar()
    {
        return $this->belongsTo(goldar::class, 'goldar_id');
    }

    public function gizi()
    {
        return $this->belongsTo(gizi::class, 'kondisigizi_id');
    } */

    public function blok6()
    {
        return $this->hasMany(blok6::class);
    } 

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'id_warga');
    } 
    
}
