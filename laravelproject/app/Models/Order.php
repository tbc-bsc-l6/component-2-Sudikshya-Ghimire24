<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total_price', 'billing_name', 'billing_address', 'payment_info', 'status'
    ];

    // Relationship to order items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
