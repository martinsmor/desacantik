<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daya extends Model
{
    use HasFactory;
    protected $table = 'daya';
    protected $primaryKey = 'id';
    protected $fillable = ['daya_terpasang'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'daya_id','id');
    }
}
