<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['shop_category_id','title', 'main_image', 'detail_images', 'old_price','price','description'];

    protected $casts = [
        'detail_images' => 'array',
    ];

    public function shopCategory()
    {
        return $this->belongsTo(ShopCategory::class, 'shop_category_id');
    }

    
}