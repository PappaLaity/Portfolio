<?php

namespace User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model 
{

    protected $table = 'User';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function skill()
    {
        return $this->hasMany('Skill');
    }

    public function formation()
    {
        return $this->hasMany('Formation');
    }

    public function experience()
    {
        return $this->hasMany('Experience');
    }

}