<?php

namespace Skill;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model 
{

    protected $table = 'Skill';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}