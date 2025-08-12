<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyInvoice extends Model
{
    use HasFactory;

    // Define the table name (optional if the table name follows Laravel's convention)
    protected $table = 'monthly_invoices';

    // Specify the fillable fields to protect against mass-assignment vulnerabilities
    protected $fillable = [
        'customer_id',
        'all_inv_number',
    ];

    // Define the relationship with the Customer model (if required)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
