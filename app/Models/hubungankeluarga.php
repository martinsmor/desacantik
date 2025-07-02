<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hubungankeluarga extends Model
{
    use HasFactory;
    protected $table = 'hubungankeluarga';
    protected $primaryKey = 'id';
    protected $fillable = ['hubungan_keluarga'];

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'hubungan_keluarga_id','id');
    }

    
}
