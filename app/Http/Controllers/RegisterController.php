<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //register function
        

        /*$name = $request->input('name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $hotel_name = $request->input('hotel_name');
        $number_of_room = $request->input('number_of_room');
        $username = $request->input('username');
        $password = $request->input('password');

        $data = $array("name" => $name, "email" => $email,"phone_number" => $phone_number, "hotel_name" => $hotel_name, "number_of_room" => $number_of_room, "username" => $username, "password" => $password );

        DB::table('registers')->insert($data);

        echo "Success";*/

       /* $data = DB::insert("insert into registers (id,name,email,phone_number,hotel_name,number_of_room,username,password) value(?,?,?,?,?,?,?,?)")
        print_r($data);*/

        //DB::table('registers')->insert()
//);
        $user = new register;
        $user->name = input::get("name");
        $user->email = input::get("email");
        $user->phone_number = input::get("phone_number");
        $user->hotel_name = input::get("hotel_name");
        $user->number_of_room = input::get("number_of_room");
        $user->username = input::get("username");
        $user->password = input::get("password");
        $user->save();

        
        return view('Login');

        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }
}
