<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sumberminum extends Model
{
    use HasFactory;
    protected $table = 'sumberminum';
    protected $primaryKey = 'id';
    protected $fillable = ['sumber_minum'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'sumber_minum_id','id');
    }
}
