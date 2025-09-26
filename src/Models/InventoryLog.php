<?php

namespace Ecommerce\ProductInventory\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryLog extends Model
{
    protected $fillable = ['product_id', 'type', 'quantity', 'balance'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
