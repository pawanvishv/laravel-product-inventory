<?php
namespace Ecommerce\ProductInventory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ecommerce\ProductInventory\Models\Product;
use Ecommerce\ProductInventory\Models\InventoryLog;

class ProductController
{

    public function dashboard()
    {
        $products = Product::with('logs')->get();

        return view('product-inventory::products.index', compact('products'));
    }


    public function index()
    {
        return Product::with('logs')->get();
    }

    public function sale(Request $request, Product $product)
    {
        $qty = (int) $request->input('quantity');

        if ($product->quantity < $qty) {
            return response()->json(['error' => 'Not enough stock'], Response::HTTP_BAD_REQUEST);
        }

        $product->decrement('quantity', $qty);

        $log = InventoryLog::create([
            'product_id' => $product->id,
            'type'       => 'sale',
            'quantity'   => $qty,
            'balance'    => $product->quantity,
        ]);

        return response()->json(['product' => $product, 'log' => $log]);
    }

    public function returnProduct(Request $request, Product $product)
    {
        $qty = (int) $request->input('quantity');

        $product->increment('quantity', $qty);

        $log = InventoryLog::create([
            'product_id' => $product->id,
            'type'       => 'return',
            'quantity'   => $qty,
            'balance'    => $product->quantity,
        ]);

        return response()->json(['product' => $product, 'log' => $log]);
    }

    public function logs(Product $product)
    {
        return $product->logs()->latest()->get();
    }
}
