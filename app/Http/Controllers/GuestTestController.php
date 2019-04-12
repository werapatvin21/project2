<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestTestController extends Controller
{
    public function index()
    {
        
        return view('/GuestTest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $show_data = DB::table('registers')->get();
        return view('GuestTest',['show_data'=>$show_data]);
        
    }
}
