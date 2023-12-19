<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleshistoryController extends Controller
{
    public function sellshistory()
    {
        //$product = Product::get(['id','product_name']);
        $sells = Sale::get(['id','sell_date','product_name','sell_quantity','sell_amount']);

        // return $subcategories;
        return view('sellshistory.sellshistory', compact('sells'));
    }
}
