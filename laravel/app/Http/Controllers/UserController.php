<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function createUser(Request $request){
        $users = new \App\Models\User;

                $firstname=$request->firstname;
                $lastname=$request->lastname;
                $street=$request->street;
                $zip=$request->zip;
                $city=$request->city;
                $phone=$request->phone;
                $password=$request->password;
                $email=$request->email;
                
                $users->first_name=$firstname;
                $users->last_name=$lastname;
                $users->street=$street;
                $users->zip=$zip;
                $users->city=$city;
                $users->phone=$phone;
                $users->password=$password;
                $users->email=$email;

                $users->password = password_hash($users->password, PASSWORD_DEFAULT);

                $insert=$users->save();

                if($insert){
                    return redirect('/products');
                }
        }
    public function registration(){
        return view('register');
    }

    public function login(Request $request){
        $user = \App\Models\User::where('email', $request->email)->first();

        if($user && password_verify($request->password, $user->password)){
            $request->session()->put('userId', $user->id);
            return redirect('/products');
            if($request->session()->has('itemsInCart')){
                $this->redirectTo = url()->previous();
            }else{
                return redirect('/login');
            }
        }
    }

    public function loginLoader(){
        return view('login');
    }
    public function orders(Request $request){
        if($request->session()->has('userId')){
            $userId = $request->session()->get('userId');
            $orders = \App\Models\Order::all()->where('user_id', $userId);
            return view('profile', ['orders' => $orders]);
            }
            else
            {
                return redirect('/login');
            }
    }
}
