<?php

namespace Ecommerce\ProductInventory;

use Illuminate\Support\ServiceProvider;

class ProductInventoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind services here
    }

    public function boot(): void
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'product-inventory');

        // Publish config
        $this->publishes([
            __DIR__.'/Config/product-inventory.php' => config_path('product-inventory.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/Resources/views' => resource_path('views/vendor/product-inventory'),
        ], 'product-inventory-views');
    }
}
