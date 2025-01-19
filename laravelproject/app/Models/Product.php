<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // If your table name doesn't follow Laravel's naming conventions
    protected $table = 'products'; 

    // Define the fields that are mass-assignable
    protected $fillable = ['name', 'description', 'price', 'category', 'image_url'];
}
