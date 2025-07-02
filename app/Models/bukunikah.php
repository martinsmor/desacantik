<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukunikah extends Model
{
    use HasFactory;
    protected $table = 'bukunikah';
    protected $primaryKey = 'id';
    protected $fillable = ['bukunikah'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'bukunikah_id','id');
    }
}
