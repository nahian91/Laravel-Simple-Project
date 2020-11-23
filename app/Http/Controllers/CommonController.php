<?php

namespace App\Http\Controllers;

use App\Models\Common;
use App\Models\Services;
use App\Models\Team;
use App\Models\Portfolio;
use App\Models\About;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function totalCount()
    {
        $total_services = Services::all();
        $total_about = Team::all();
        $total_portfolio = Portfolio::all();
        $total_teams = About::all();
        return view('dashboard.layouts.dashboard', compact('total_services','total_about','total_portfolio','total_teams'));
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
     * @param  \App\Models\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function show(Common $common)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function edit(Common $common)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Common $common)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Common  $common
     * @return \Illuminate\Http\Response
     */
    public function destroy(Common $common)
    {
        //
    }
}
