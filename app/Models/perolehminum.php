<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perolehminum extends Model
{
    use HasFactory;
    protected $table = 'perolehminum';
    protected $primaryKey = 'id';
    protected $fillable = ['peroleh_minum'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'peroleh_minum_id','id');
    }
}
