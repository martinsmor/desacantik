<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilcacah extends Model
{
    use HasFactory;
    protected $table = 'hasilcacah';
    protected $primaryKey = 'id';
    protected $fillable = ['hasilcacah'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'hasilcacah_id','id');
    }
}
