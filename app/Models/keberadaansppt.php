<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keberadaansppt extends Model
{
    use HasFactory;
    protected $table = 'keberadaansppt';
    protected $primaryKey = 'id';
    protected $fillable = ['keberadaan_SPPT'];

    public function blok6()
    {
        return $this->hasMany(blok6::class, 'sppt_id','id');
    }
}
