<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart(Request $request) {
        $itemsInCart = $request->session()->get('itemsInCart');
        return view('order', ['itemsInCart' => $itemsInCart]);
    }
}
