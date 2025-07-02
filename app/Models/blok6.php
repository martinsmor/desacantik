<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blok6 extends Model
{
    use HasFactory;
    protected $table = 'blok6';
    protected $primaryKey = 'id';
    protected $fillable = 
        [
            'warga_id',
            'nama_lahan',
            'jenislahan_id',
            'sppt_id',
            'nomor_pajak',
            'luas_lahan',
            'hakmiliksertif_id',
            'nama_hakmilik',
        ];

       public function warga()
       {
        return $this->belongsTo(warga::class);
       }

        public function jenislahan()
        {
            return $this->belongsTo(jenislahan::class, 'jenislahan_id');
        }

        public function sppt()
        {
            return $this->belongsTo(keberadaansppt::class, 'sppt_id');
        } 

        public function sertif()
        {
            return $this->belongsTo(hakmiliksertif::class, 'sertif_id');
        } 
}
