<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventorieFactory> */
    use HasFactory;

    // Relación con Warehouse
    public function Warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'Warehouse_id');
    }

    // Relación con producto
    public function Product()
    {
        return $this->belongsTo(Product::class, 'Product_id');
    }
}
