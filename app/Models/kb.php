<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kb extends Model
{
    use HasFactory;
    protected $table = 'kb';
    protected $primaryKey = 'id';
    protected $fillable = ['kb'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'kb_id','id');
    }
}
