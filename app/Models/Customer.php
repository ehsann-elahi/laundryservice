<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'email',
        'geolocation',
        'address',
        'info',
        'latitude',
        'longitude',
        'phone_number'
    ];

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }

    public function invoices()
    {
        return $this->hasMany(MonthlyInvoice::class);
    }

    public function orderRoute()
    {
        return route('customer.order', [
            'id' => $this->id,
            'address' => urlencode($this->address),
            'lat' => $this->latitude,
            'lng' => $this->longitude,
        ]);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
