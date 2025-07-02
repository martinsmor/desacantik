<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keberadaankeluarga extends Model
{
    use HasFactory;
    protected $table = 'keberadaankeluarga';
    protected $primaryKey = 'id';
    protected $fillable = ['keberadaan'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'keberadaan_id','id');
    }
}
