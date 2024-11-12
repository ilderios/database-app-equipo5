<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
    {
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;

    protected $fillable = [
        'shopping_id',
        'product_id',
        'quantity',
    ];

    // Relación con producto
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
