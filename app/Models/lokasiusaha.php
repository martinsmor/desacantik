<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasiusaha extends Model
{
    use HasFactory;
    protected $table = 'lokasiusaha';
    protected $primaryKey = 'id';
    protected $fillable = ['lokasi_usaha'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'tempat_usaha_id','id');
    }
}
