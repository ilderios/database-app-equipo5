<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    /** @use HasFactory<\Database\Factories\WarehouseFactory> */
    use HasFactory;

    // Definimos la relación con inventarios
    public function inventories()
    {
        return $this->hasMany(Inventorie::class, 'Warehouse_id');
    }
}
