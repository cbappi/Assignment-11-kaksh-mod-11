<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

class StockController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('stock.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('stock.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('stock.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('stock.index');
    }

    public function sellForm($id)
    {
        $product = Product::findOrFail($id);
        return view('stock.sell', compact('product'));
    }



    public function sell(Request $request, $id)
        {
            $product = Product::findOrFail($id);

            // Validate sell quantity
            $request->validate([
                'sell_quantity' => 'required|integer|min:1|max:' . $product->product_quantity,
            ]);



            Sale::create([
                'sell_date' => $request->sell_date,
                'product_name' => $product->product_name,
                'unit_price' => $product->unit_price,
                'sell_quantity' => $request->sell_quantity,

                $totalAmount =  $product->unit_price * $request->sell_quantity,

                'sell_amount' => $totalAmount,

                ]);


            $product->decrement('product_quantity', $request->sell_quantity);

            return redirect()->route('stock.index');


        }


    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'unit_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
        ]);

        Product::create($request->all());

        return redirect()->route('stock.index');
    }




}


