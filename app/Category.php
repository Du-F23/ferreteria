<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* definimos los campos de nuestra tabla */
    protected $fillable = [
        'name',
    ];
}
