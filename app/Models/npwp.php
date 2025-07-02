<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npwp extends Model
{
    use HasFactory;
    protected $table = 'npwp';
    protected $primaryKey = 'id';
    protected $fillable = ['npwp'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'npwp_id','id');
    }
}
