<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class ResikoJatuh extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'resiko_jatuh';
    protected $fillable = ['no_mr', 'ruangan', 'bed', 'nama', 'risiko_jatuh'];
}
