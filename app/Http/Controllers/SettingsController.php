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
        $settings = Settings::first();
        return view('dashboard.settings.view', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $settings = Settings::first();
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

        return redirect()->route('settings.view');
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
