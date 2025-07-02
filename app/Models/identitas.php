<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    use HasFactory;
    protected $table = 'identitas';
    protected $primaryKey = 'id';
    protected $fillable = ['identitas'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'identitas_id','id');
    }
}
