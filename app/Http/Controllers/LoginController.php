<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\User;
use Hash;


class LoginController extends Controller
{
    //
    public function index()
    {
        //return view('Login');
        //return view('Dashboard');
    }

    public function login(Request $request)
    {
    	//login function

    	

        /*$username_input = $request->input('username');
        $password_input = $request->input('password');

        /*$validate_username = DB::table('registers')->select('*')->where('username',Input::get('username'))->first();*/

        /*$validate_user = DB::table('registers')->select('*')->where(['username' , input::get('username')],['password',input::get('password') ])->get();*/

        
        //dd($validate_user);
        /*if ($username_input == $validate_user && $password_input == $validate_user){

            return view('/Dashboard');
        }
        else{
            die("Incorrect Username or Password");
            return view('/Register');
        }*/

        


        //dd($validate_user); เอาไว้เช็คqueryเฉยๆ

        

    }
    /*public function logout(){
        \Auth::logout();
        return redirect()->route('Register');
    }*/


}
