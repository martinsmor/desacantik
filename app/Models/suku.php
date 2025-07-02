<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suku extends Model
{
    use HasFactory;
    protected $table = 'suku';
    protected $primaryKey = 'id';
    protected $fillable = ['suku'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'suku_id','id');
    }
}
