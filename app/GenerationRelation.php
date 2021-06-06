<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenerationRelation extends Model
{
    protected $fillable = ['user_id', 'refer_id', 'generation_id'];

    use SoftDeletes;
}
