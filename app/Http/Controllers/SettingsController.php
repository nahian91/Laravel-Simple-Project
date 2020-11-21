<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::all();
        return view('dashboard.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = new Settings;
        $settings->site_title = $request->site_title;
        $settings->site_description = $request->site_description;
        $settings->services_title = $request->services_title;
        $settings->services_description = $request->services_description;
        $settings->portfolio_title = $request->portfolio_title;
        $settings->portfolio_description = $request->portfolio_description;
        $settings->about_title = $request->about_title;
        $settings->about_description = $request->about_description;
        $settings->team_title = $request->team_title;
        $settings->team_description = $request->team_description;
        $settings->contact_title = $request->contact_title;
        $settings->contact_description = $request->contact_description;

        $settings->save();

        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Settings::find($id);
        return view('dashboard.settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $settings = Settings::find($id);
        $settings->site_title = $request->site_title;
        $settings->site_description = $request->site_description;
        $settings->services_title = $request->services_title;
        $settings->services_description = $request->services_description;
        $settings->portfolio_title = $request->portfolio_title;
        $settings->portfolio_description = $request->portfolio_description;
        $settings->about_title = $request->about_title;
        $settings->about_description = $request->about_description;
        $settings->team_title = $request->team_title;
        $settings->team_description = $request->team_description;
        $settings->contact_title = $request->contact_title;
        $settings->contact_description = $request->contact_description;

        $settings->save();

        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
