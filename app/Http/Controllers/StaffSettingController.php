<?php

namespace App\Http\Controllers;

use App\StaffSetting;
use Illuminate\Http\Request;

class StaffSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('StaffSetting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\StaffSetting  $staffSetting
     * @return \Illuminate\Http\Response
     */
    public function show(StaffSetting $staffSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StaffSetting  $staffSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffSetting $staffSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffSetting  $staffSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffSetting $staffSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StaffSetting  $staffSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffSetting $staffSetting)
    {
        //
    }
}
