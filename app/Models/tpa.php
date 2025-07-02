<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpa extends Model
{
    use HasFactory;
    protected $table = 'tpa';
    protected $primaryKey = 'id';
    protected $fillable = ['tpa'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'tpa_id','id');
    }
}
