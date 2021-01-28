<?php

namespace Experience;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model 
{

    protected $table = 'Experience';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}