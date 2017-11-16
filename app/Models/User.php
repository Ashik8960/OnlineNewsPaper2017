<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
    public function setFirstNameAttribute($value)
    {

        $this->attributes['first_name'] =strtoupper($value);
    }
}
