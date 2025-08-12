<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Package extends Authenticatable
{

    protected $fillable = [
        'name','price','weight','list'
    ];
 
}
