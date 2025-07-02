<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statuskawin extends Model
{
    use HasFactory;
    protected $table = 'statuskawin';
    protected $primaryKey = 'id';
    protected $fillable = ['statuskawin'];

    public function warga()
    {
        return $this->hasMany(warga::class, 'status_kawin_id','id');
    }
}
