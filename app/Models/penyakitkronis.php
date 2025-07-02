<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakitkronis extends Model
{
    use HasFactory;
    protected $table = 'penyakitkronis';
    protected $primaryKey = 'id';
    protected $fillable = ['penyakit_kronis'];

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'penyakitkronis_id','id');
    }
}
