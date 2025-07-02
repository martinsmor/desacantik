<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gizi extends Model
{
    use HasFactory;
    protected $table = 'gizi';
    protected $primaryKey = 'id';
    protected $fillable = ['gizi'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'gizi_id','id');
    }
}
