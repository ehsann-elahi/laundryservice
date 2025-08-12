<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopCategory extends Model
{
    
    protected $table = 'shopcategories'; 
    
    protected $fillable = [
       'name','description'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_category_id');
    }
}
