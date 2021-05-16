<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlosKaro extends Model
{
    use HasFactory;
    protected $table = 'data_web3';
    protected $primaryKey = 'id';
}
