<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jk extends Model
{
    use HasFactory;
    protected $table = 'jk';
    protected $primaryKey = 'id';
    protected $fillable = ['jk'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'jenis_kelamin_id','id');
    }
}
