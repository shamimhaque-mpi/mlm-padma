<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;


    protected $fillable = ['product_name', 'category_id', 'subcategory_id', 'brand_id', 'unit', 'purchase_price', 'regular_price',  'discount',   'discount_duration', 'point', 'offer',  'min_delivery_day',  'max_return_day',  'min_order_qty',  'warranty', 'status', 'feature_product', 'description', 'position', 'status'];


    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id')->select('id', 'category_name');
    }

    public function subcategory()
    {
        return $this->hasOne('App\Subcategory', 'id', 'subcategory_id')->select('id', 'subcategory_name');
    }

    public function brand()
    {
        return $this->hasOne('App\Brand', 'id', 'brand_id')->select('id', 'brand_name');
    }

    public function image()
    {
        return $this->hasOne('App\Product_image', 'product_id', 'id');
    }


    public function images()
    {
        return $this->hasMany('App\Product_image', 'product_id', 'id');
    }
}
