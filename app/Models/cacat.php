<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cacat extends Model
{
    use HasFactory;
    protected $table = 'cacat';
    protected $primaryKey = 'id';
    protected $fillable = ['cacat'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'cacat_id','id');
    }
}
