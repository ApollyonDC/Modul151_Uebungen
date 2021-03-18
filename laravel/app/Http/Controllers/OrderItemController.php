<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function loadCart(Request $request){
        if($request->session()->has('itemsInCart')){
            $itemsInCart = $request->session()->get('items');
        }
        else{
            $itemsInCart = array();
        }
    }

    public function addItem($id, Request $request){
        loadCart();
        $itemsInCart.push($id);
        $request->session()->put('itemsInCart',$itemsInCart);
        return view('order', ['order' => $itemsInCart]);
    }
}
