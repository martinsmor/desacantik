<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\warga;

class kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan'; 
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kec'];

    public function warga()
    {
        return $this->hasMany(warga::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'kecamatan_id');
    }

    

}
