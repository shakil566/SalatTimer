<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SalatTime extends Model
{
    protected $table = 'salat_times';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'time',
        'status',
    ];
}
