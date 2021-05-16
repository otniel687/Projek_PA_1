<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulos extends Model
{
    use HasFactory;
    protected $table = 'data_web1';
    protected $fillable = ['id', 'nama', 'informasi', 'gambar', ];
}
