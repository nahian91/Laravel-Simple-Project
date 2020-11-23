<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view('dashboard.footer.view', compact('footer'));
    }

    public function update(Request $request)
    {
        $footer = Footer::first();
        $footer->copyright = $request->copyright;
        $footer->tw_link = $request->tw_link;
        $footer->fb_link = $request->fb_link;
        $footer->ln_link = $request->ln_link;
        $footer->save();

        return redirect()->route('footer.view');
    }
}
