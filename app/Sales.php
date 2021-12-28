<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
'client_id',
'product_id',
'user_id',
'category_id',
'quantity'
    ];
}
