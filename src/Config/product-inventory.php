<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Stock Quantity
    |--------------------------------------------------------------------------
    | This value will be used when adding a new product if no stock is provided.
    */
    'default_stock' => 0,

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    | Default currency for inventory items. You can use 'INR', 'USD', etc.
    */
    'currency' => 'INR',

    /*
    |--------------------------------------------------------------------------
    | Low Stock Alert Threshold
    |--------------------------------------------------------------------------
    | When product stock falls below this value, it can trigger an alert.
    */
    'low_stock_threshold' => 5,

    /*
    |--------------------------------------------------------------------------
    | Enable Inventory Logging
    |--------------------------------------------------------------------------
    | Set to true if you want to log stock changes (add, remove, update).
    */
    'log_changes' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Product Category
    |--------------------------------------------------------------------------
    | Optional default category for new products.
    */
    'default_category' => 'General',

];
