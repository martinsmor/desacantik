<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statuskerja extends Model
{
    use HasFactory;
    protected $table = 'statuskerja';
    protected $primaryKey = 'id';
    protected $fillable = ['status_kerja'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'status_pekerjaan_id','id');
    }
}
