<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    /** @use HasFactory<\Database\Factories\WarehouseFactory> */
    use HasFactory;

    // Definimos la relación con inventarios
    public function Inventory()
    {
        return $this->hasMany(Inventory::class, 'Warehouse_id');
    }
}