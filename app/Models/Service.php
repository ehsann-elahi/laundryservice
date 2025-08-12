<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'category',
        'itemName',
        'W_Price',
        'P_Price',
        'WP_Price',
        'DC_Price',
        'description',
        'image',
    ];
    
}
