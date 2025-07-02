<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa_kelurahan extends Model
{
    use HasFactory;
    protected $table = 'desa_kelurahan';
    protected $primaryKey = 'id';
    protected $fillable = ['desa_kel'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'desa_kel_id','id');
    }
}
