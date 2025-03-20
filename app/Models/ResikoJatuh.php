<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class ResikoJatuh extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'resiko_jatuh';
    protected $fillable = ['no_mr', 'ruangan', 'bed', 'nama', 'risiko_jatuh'];
}
