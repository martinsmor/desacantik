<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goldar extends Model
{
    use HasFactory;
    protected $table = 'goldar';
    protected $primaryKey = 'id';
    protected $fillable = ['goldar'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'goldar_id','id');
    }
}
