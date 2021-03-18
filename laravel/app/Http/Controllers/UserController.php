<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function createUser(){
        if(isset($_POST['submit'])){

            try {
                DB::beginTransaction();
                DB::table('users')->insert(['email' => $_POST['email'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'firstname' => $_POST['firstname'],'lastname'=> $_POST['lastname'],'street'=> $_POST['street'],'zip'=> $_POST['zip']
                ,'city'=> $_POST['city'],'phone'=> $_POST['phone']]);
                return view('products');
            }
            catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        }
        else{
            return view('register');
        }
    }
}
