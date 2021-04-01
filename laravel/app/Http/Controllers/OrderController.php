<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart(Request $request) {
        $itemsInCart = $request->session()->get('itemsInCart');
        $totalPrice = 0;
                foreach($itemsInCart as $product){
                   $totalPrice += $product->count * $product->price;
                }
        return view('order', ['itemsInCart' => $itemsInCart, 'total' => $totalPrice]);
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
    public function orderInfo(Request $request){
        if($request->session()->has('userId')){
            if($request->session()->has('itemsInCart')){
                    $id = $request->session()->get('userId');
                    $user = \App\Models\User::find($id);
                    if($request->session()->get('userAd') == 0){
                        $request->session()->put('userAd', 1);
                        return view('orderInfoL', ['user' => $user]);
                    }
                    else{
                        $request->session()->put('userAd', 0);
                        return view('orderInfo');
                    }
                }
            else{
                return redirect('/products');
                }
        }
        else{
            return redirect('/login');
        }
    } //Die folgenden Funktionen wären schöner in JS, hierfür habe ich aber keine Zeit.
    public function removeItem($id, Request $request){
        $itemsInCart = $request->session()->get('itemsInCart');
        $product = \App\Models\Product::find($id);
        foreach($itemsInCart as $_product){
            if($product->id == $_product->id){
                $toBeDeleted = array_search($_product,$itemsInCart);
                unset($itemsInCart[$toBeDeleted]);
            }
        }
        $request->session()->put('itemsInCart',$itemsInCart);
        return redirect('/order');
    }
    public function incrementItem($id, Request $request){
        $itemsInCart = $request->session()->get('itemsInCart');
        $product = \App\Models\Product::find($id);
        foreach($itemsInCart as $_product){
            if($product->id == $_product->id){
                $_product->count ++;
            }
        }
        $request->session()->put('itemsInCart',$itemsInCart);
        return redirect('/order');
    }
    public function decrementItem($id, Request $request){
        $itemsInCart = $request->session()->get('itemsInCart');
        $product = \App\Models\Product::find($id);
        foreach($itemsInCart as $_product){
            if($product->id == $_product->id){
                if($_product->count > 1){
                $_product->count --;
                }
            }
        }
        $request->session()->put('itemsInCart',$itemsInCart);
        return redirect('/order');
    }
}
