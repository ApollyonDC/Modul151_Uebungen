<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function createUser(){
        if(isset($_POST['submit'])){

            try {
                DB::beginTransaction();
                DB::table('logins')->insert(['username' => $_POST['username'], 'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'firstname' => $_POST['firstname'],'lastname'=> $_POST['lastname']]);
            }
            catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        }
    }
}
