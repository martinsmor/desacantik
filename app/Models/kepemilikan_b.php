<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepemilikan_b extends Model
{
    use HasFactory;
    protected $table = 'kepemilikan_b';
    protected $primaryKey = 'id';
    protected $fillable = ['kepemilikan_b'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'kepemilikan_b_id','id');
    }
}
