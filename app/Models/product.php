<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    // Relación con inventarios
    public function Inventory()
    {
        return $this->hasMany(Inventory::class, 'Product_id');
    }

    // Relación con carritos
    public function Carts()
    {
        return $this->hasMany(Cart::class, 'Product_id');
    }
}
