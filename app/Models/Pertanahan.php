<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanahan extends Model
{
    protected $table = 'pertanahans';
    protected $fillable = ["kategori", "sub_kategori", "uraian", "jumlah"];
    use HasFactory;
}
