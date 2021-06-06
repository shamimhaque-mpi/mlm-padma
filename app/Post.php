<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'district_id', 'upazila_id', 'company_name', 'description', 'salary_from', 'salary_to', 'status', 'featured_post', 'post_position', 'job_type'];


    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id')->select('id', 'category_name');
    }

    public function district()
    {
        return $this->hasOne('App\District', 'id', 'district_id')->select('id', 'district_name');
    }

    public function upazila()
    {
        return $this->hasOne('App\Upazila', 'id', 'upazila_id')->select('id', 'upazila_name');
    }
}
