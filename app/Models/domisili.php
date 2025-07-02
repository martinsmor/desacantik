<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domisili extends Model
{
    use HasFactory;
    protected $table = 'domisili';
    protected $primaryKey = 'id';
    protected $fillable = ['domisili'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'domisili_id','id');
    }
}
