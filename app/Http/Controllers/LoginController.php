<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
    	//login function

    	$username = $request->input('username');
    	$password = $request->input('password');

    	$CheckLogin = DB::table(registers)->where(['username'=>$username , 'password'=>$password])->get();
        if(count($CheckLogin) >0)
        {
            echo "Login Successful";
        }
        else
        {
            echo "Login Failed Wrong Username or Password";ิ
        }
    }


}
