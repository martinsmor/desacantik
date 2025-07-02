<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class omset extends Model
{
    use HasFactory;
    protected $table = 'omset';
    protected $primaryKey = 'id';
    protected $fillable = ['omset'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'omset_id','id');
    }
}
