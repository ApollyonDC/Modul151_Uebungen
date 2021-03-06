<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list() {
        $products = \App\Models\Product::all();
        return view('products', ['products' => $products]);

        //echo "<pre>";
        //var_dump($products);
        //die();
    }

    public function detail($id) {
        $product = \App\Models\Product::find($id);
        //$product = \App\Models\Product::where('id', $id)->first();
    return view('productdetail', ['product' => $product]);
    }
}
