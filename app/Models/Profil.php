<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ["kategori", "sub_kategori", "uraian", "jumlah"];
    use HasFactory;
}
