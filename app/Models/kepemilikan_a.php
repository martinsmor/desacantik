<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepemilikan_a extends Model
{
    use HasFactory;
    protected $table = 'kepemilikan_a';
    protected $primaryKey = 'id';
    protected $fillable = ['kepemilikan_a'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'kepemilikan_a_id','id');
    }
}
