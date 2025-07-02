<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hakmiliksertif extends Model
{
    use HasFactory;
    protected $table = 'hakmiliksertif';
    protected $primaryKey = 'id';
    protected $fillable = ['hakmilik_sertif'];

    public function blok6()
    {
        return $this->hasMany(blok6::class, 'sertif_id','id');
    }
}
