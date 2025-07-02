<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kloset extends Model
{
    use HasFactory;
    protected $table = 'kloset';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_kloset'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'kloset_id','id');
    }
}
