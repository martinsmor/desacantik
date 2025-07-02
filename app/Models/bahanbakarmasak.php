<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanbakarmasak extends Model
{
    use HasFactory;
    protected $table = 'bahanbakarmasak';
    protected $primaryKey = 'id';
    protected $fillable = ['bahanbakar_masak'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'bahanmasak_id','id');
    }
}
