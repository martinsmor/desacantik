<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenislantai extends Model
{
    use HasFactory;
    protected $table = 'jenislantai';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_lantai'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'jenislantai_id','id');
    }
}
