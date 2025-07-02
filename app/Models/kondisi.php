<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisi extends Model
{
    use HasFactory;
    protected $table = 'kondisi';
    protected $primaryKey = 'id';
    protected $fillable = ['kondisi'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'kondisi_dinding_id','id');
        return $this->hasMany(warga::class, 'kondisi_atap_id','id');
    }


}
