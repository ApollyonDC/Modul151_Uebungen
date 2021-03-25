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

            }else{

            }
        }else{
            return redirect('/login');
        }
    }

    public function confirmOrder(){

    }

    public function placeOrder(){
        
    }
}
