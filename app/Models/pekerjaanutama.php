<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerjaanutama extends Model
{
    use HasFactory;
    protected $table = 'pekerjaanutama';
    protected $primaryKey = 'id';
    protected $fillable = ['pekerjaan_utama'];

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'pekerjaan_utama_id','id');
    }
}
