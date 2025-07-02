<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenislahan extends Model
{
    use HasFactory;
    protected $table = 'jenislahan';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_lahan'];

    public function blok6()
    {
        return $this->hasMany(blok6::class, 'jenislahan_id','id');
    } 
}
