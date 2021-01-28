<?php

namespace Formation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model 
{

    protected $table = 'Formation';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}