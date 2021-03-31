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
            $request->session()->put('itemsInCart', $itemsInCart);
        }
    }

    public function addItem($id, Request $request){
        $this->loadCart($request);
        $itemsInCart = $request->session()->get('itemsInCart');
        $product = \App\Models\Product::find($id);
        $products = \App\Models\Product::all();

        $exists = 0;
        foreach($itemsInCart as $_product){
            if($product->id == $_product->id){
                $_product->count ++;
                $exists = 1;
            }
        }
        if($exists == 0){
            $product->count = 1;
            array_push($itemsInCart, $product);
        }
        $request->session()->put('itemsInCart',$itemsInCart);
        return view('products', ['products' => $products]);
    }
}
