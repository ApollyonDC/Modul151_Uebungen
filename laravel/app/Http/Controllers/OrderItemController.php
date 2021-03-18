<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function loadCart(Request $request){
        if($request->session()->has('itemsInCart')){
            $itemsInCart = $request->session()->get('itemsInCart');
        }
        else{
            $itemsInCart = [];
        }
    }

    public function addItem($id, Request $request){
        $this->loadCart($request);
        $itemsInCart = $request->session()->get('itemsInCart');
        $product = \App\Models\Product::find($id);
        $products = \App\Models\Product::all();
        array_push($itemsInCart, $product);
        $request->session()->put('itemsInCart',$itemsInCart);
        return view('products', ['products' => $products]);
    }
}
