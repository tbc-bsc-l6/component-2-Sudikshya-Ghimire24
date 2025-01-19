<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price'
    ];

    // Relationship to the Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relationship to the Product (if you have a Product model)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
