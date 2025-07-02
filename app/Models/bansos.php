<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bansos extends Model
{
    use HasFactory;
    protected $table = 'bansos';
    protected $primaryKey = 'id';
    protected $fillable = ['bansos'];

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'bansos_id','id');
    }
}
