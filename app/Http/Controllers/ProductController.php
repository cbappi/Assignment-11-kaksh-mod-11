<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function sellForm($productId)
    {
        $product = Product::findOrFail($productId);
        return view('products.sell-form', compact('product'));
    }

    public function sell(Request $request, $productId)
    {
        $request->validate([
            'sell_qty' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($productId);

        if ($product->product_quantity < $request->sell_qty) {
            return back()->with('error', 'Not enough stock available.');
        }

        // Create a sale record
        Sale::create([
            'product_name' => $product->product_name,
            'unit_price' => $product->unit_price,
            'sell_qty' => $request->sell_qty,
        ]);

        // Update product quantity
        $product->update(['product_quantity' => $product->product_quantity - $request->sell_qty]);

        return redirect()->route('products.index')->with('success', 'Sale recorded successfully.');
    }

    public function salesIndex()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }
}
