<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = ['pendidikan'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'pendidikan_id','id');
    }
}
