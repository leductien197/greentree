<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PlantDisease extends Model
{
    protected $fillable = [
        'type',
        'code',
        'name'
    ];
}
