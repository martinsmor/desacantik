<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisdinding extends Model
{
    use HasFactory;
    protected $table = 'jenisdinding';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_dinding'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'jenis_dinding_id','id');
    }
}
