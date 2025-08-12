<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'tap_id',
        'order_id',
        'transaction_id',
        'amount',
        'currency',
        'status',
        'raw_response',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
