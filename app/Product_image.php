<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_image extends Model
{
    use SoftDeletes;

    protected $fillable = ['product_id', 'small', 'medium', 'large'];
}
