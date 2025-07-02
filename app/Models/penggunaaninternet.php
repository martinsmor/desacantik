<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggunaaninternet extends Model
{
    use HasFactory;
    protected $table = 'penggunaaninternet';
    protected $primaryKey = 'id';
    protected $fillable = ['penggunaan_internet'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'internet_id','id');
    }
}
