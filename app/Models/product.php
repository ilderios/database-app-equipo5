<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    // Relación con inventarios
    public function inventories()
    {
        return $this->hasMany(inventorie::class, 'product_id');
    }

    // Relación con carritos
    public function carts()
    {
        return $this->hasMany(cart::class, 'product_id');
    }
}
