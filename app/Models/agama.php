<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agama extends Model
{
    use HasFactory;
    protected $table = 'agama';
    protected $primaryKey = 'id';
    protected $fillable = ['agama'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'agama_id','id');
    }
}
