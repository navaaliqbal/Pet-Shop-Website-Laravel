<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if your table name is the plural of the model)
    protected $table = 'products';

    // Define which fields are mass assignable
    protected $fillable = [
        'category', 
        'name', 
        'description', 
        'price',
    ];

    // Optional: You can define relationships, casts, or additional methods here if needed
}
