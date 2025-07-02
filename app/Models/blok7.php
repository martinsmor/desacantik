<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blok7 extends Model
{
    use HasFactory;
    protected $table = 'blok7';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
            'id_warga',
            'nomor_urut',
            'nama_anggota',
            'nik',
            'hubungan_keluarga_id',
            'keberadaan_id',
            'jenis_kelamin_id',
            'tanggal_lahir',
            'umur',
            'agama_id',
            'suku_id',
            'domisili_id',
            'bansos_id',
            'status_kawin_id',
            'kepemilikan_bukunikah_id',
            'KK_id',
            'identitas_id',
            'kehamilan_id',
            'KB_id',
            'sekolah_id',
            'jenjang_sekolah_id',
            'kelas_id',
            'ijazah_id',
            'pensiunan_id',
            'bekerja_id',
            'lamabekerja_id',
            'pekerjaan_utama_id',
            'status_pekerjaan_id',
            'NPWP_id',
            'transaksi_id',
            'usaha_id',
            'lapangan_usaha',
            'pekerja_dibayar',
            'pekerja_tidakdibayar',
            'perizinan_usaha',
            'tempat_usaha_id',
            'omset_id',
            'internet_id',
            'cacat_id',
            'penyakitkronis_id',
            'golongandarah_id',
            'kondisigizi_id',
    ];

    public function warga()
    {
        return $this->belongsTo(warga::class, 'id');
    } 

    public function hubungankeluarga()
    {
        return $this->belongsTo(hubungankeluarga::class, 'hubungan_keluarga_id');
    }

    public function penyakitkronis()
    {
        return $this->belongsTo(penyakitkronis::class, 'penyakitkronis_id');
    }

    public function partisipasi()
    {
        return $this->belongsTo(partisipasi::class, 'sekolah_id');
    }

    public function pilihan()
    {
        return $this->belongsTo(pilihan::class,'bekerja_id');
    }

    public function bansos()
    {
        return $this->belongsTo(bansos::class, 'bansos_id');
    }
    
    public function pekerjaanutama()
    {
        return $this->belongsTo(pekerjaanutama::class, 'pekerjaan_utama_id');
    }
}
