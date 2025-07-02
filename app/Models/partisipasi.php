<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partisipasi extends Model
{
    use HasFactory;
    protected $table = 'partisipasi';
    protected $primaryKey = 'id';
    protected $fillable = ['partisipasi'];

    public function blok7()
    {
        return $this->hasMany(blok7::class, 'sekolah_id','id');
    }

}
