<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventorie extends Model
{
    /** @use HasFactory<\Database\Factories\InventorieFactory> */
    use HasFactory;

    // Relación con warehouse
    public function warehouse()
    {
        return $this->belongsTo(warehouse::class, 'warehouse_id');
    }

    // Relación con producto
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
