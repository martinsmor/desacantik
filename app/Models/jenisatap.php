<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisatap extends Model
{
    use HasFactory;
    protected $table = 'jenisatap';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_atap'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'jenis_atap_id','id');
    }

}
