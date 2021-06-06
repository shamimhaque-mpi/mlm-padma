<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;

    protected $fillable = ['subcategory_name'];


    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id')->select('id', 'category_name');
    }
}
