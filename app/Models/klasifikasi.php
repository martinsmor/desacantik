<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klasifikasi extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi';
    protected $primaryKey = 'id';
    protected $fillable = ['klasifikasi'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'klasifikasi_id','id');
    }
}
