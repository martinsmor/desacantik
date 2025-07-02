<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilihan extends Model
{
    use HasFactory;
    protected $table = 'pilihan';
    protected $primaryKey = 'id';
    protected $fillable = ['pilihan'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'gas_id','id');
        return $this->hasMany(warga::class, 'lemari_id','id');
        return $this->hasMany(warga::class, 'ac_id','id');
        return $this->hasMany(pilihan::class,'pemanas_id');
        return $this->hasMany(pilihan::class,'pstn_id');
        return $this->hasMany(pilihan::class,'tv_id');
        return $this->hasMany(pilihan::class,'emas_id');
        return $this->hasMany(pilihan::class,'laptop_id');
        return $this->hasMany(pilihan::class,'sepeda_id');
        return $this->hasMany(pilihan::class,'motor_id');
        return $this->hasMany(pilihan::class,'mobil_id');
        return $this->hasMany(pilihan::class,'perahu_id');
        return $this->hasMany(pilihan::class,'motortempel_id');
        return $this->hasMany(pilihan::class,'perahumotor_id');
        return $this->hasMany(pilihan::class,'kapal_id');
        return $this->hasMany(pilihan::class,'lahan_id');
        return $this->hasMany(pilihan::class,'rumahlain_id');
    }

    public function blok7()
    {
        return $this->hasMany(blok7::class,'bekerja_id');
    }
}
