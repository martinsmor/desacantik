<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitasmasak extends Model
{
    use HasFactory;
    protected $table = 'fasilitasmasak';
    protected $primaryKey = 'id';
    protected $fillable = ['fasilitas_masak'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'fasilitasmasak_id','id');
    }
}
