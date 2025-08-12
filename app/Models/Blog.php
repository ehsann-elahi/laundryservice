<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Blog extends Authenticatable
{

    protected $fillable = [
        'title','image','description'
    ];
 
}
