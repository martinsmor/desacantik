<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sumberpenerangan extends Model
{
    use HasFactory;
    protected $table = 'sumberpenerangan';
    protected $primaryKey = 'id';
    protected $fillable = ['sumber_penerangan'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'penerangan_id','id');
    }
}
