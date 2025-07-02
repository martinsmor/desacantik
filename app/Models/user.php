<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;
use App\Models\kecamatan;
use App\Models\warga;

class user extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = [
       'name',
       'role',
       'kecamatan_id',
       'username',
       'password',
   ];

   public function kecamatan()
   {
    return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
   }

   public function warga()
   {
    return $this->hasMany(warga::class, 'kecamatan_id','id');
   }
   
}
