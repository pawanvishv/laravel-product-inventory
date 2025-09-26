<?php

namespace Ecommerce\ProductInventory\Models;

use Illuminate\Database\Eloquent\Model;
use Ecommerce\ProductInventory\Models\InventoryLog;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'quantity', 'price'];

    public function logs()
    {
        return $this->hasMany(InventoryLog::class);
    }
}
