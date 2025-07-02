<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $fillable = ['transaksi'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'transaksi_id','id');
    }
}
