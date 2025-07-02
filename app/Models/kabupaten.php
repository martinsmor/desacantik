<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    use HasFactory;
    protected $table = 'kabupaten';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kab'];


    public function warga()
    {
        return $this->hasOne(warga::class, 'kabupaten_id','id');
    }

}
