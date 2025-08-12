<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'services',
        'collectDay',
        'collectTime',
        'job_status',
        'collectInstruc',
        'dlvrDay',
        'dlvrTime',
        'dlvrInstruc',
        'specialInstruction',
        'freq',
        'next_order_date',
        'trn_num',
        'paymentMethod',
        'billing_status',
        'price_list',
        'last_synced_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }


    public function transfers()
    {
        return $this->hasMany('App\Models\Transfer');
    }

    public function driver()
    {
        return $this->hasOneThrough('App\Models\Driver', 'App\Models\Transfer');
    }

    public function billing()
    {
        return $this->hasOne(Billing::class);
    }
}
