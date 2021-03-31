<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart(Request $request) {
        $itemsInCart = $request->session()->get('itemsInCart');
        unset($itemsInCart[0]);
        return view('order', ['itemsInCart' => $itemsInCart]);
    }

    public function finishOrder(Request $request){
        if($request->session()->has('userId')){
            if($request->session()->has('itemsInCart')){
                $orders = new \App\Models\Order;
                $itemsInCart = $request->session()->get('itemsInCart');
                $totalPrice = 0;
                foreach($itemsInCart as $product){
                   $totalPrice += $product->count * $product->price;
                }
                $userId=$request->session()->get('userId');
                $orders->user_id=$userId;
                $orders->price=$totalPrice;
                $orders->save();
                
                $request->session()->forget('itemsInCart');
                return view('orderComplete');
            }else{

            }
        }else{
            return redirect('/login');
        }
    }
}
