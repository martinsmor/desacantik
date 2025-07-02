<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenislintang extends Model
{
    use HasFactory;
    protected $table = 'jenislintang';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_lintang'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'jenis_lintang_id','id');
    }
}
