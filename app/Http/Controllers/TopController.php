<?php

namespace App\Http\Controllers;

use App\Models\Top;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TopController extends Controller
{
    function index(){
        $top = Top::first();
        return view('dashboard.top.view', compact('top'));
    }

    function update(Request $req){
        $top = Top::first();
        $top->sub_title = $req->sub_title;
        $top->title = $req->title;
        $top->link = $req->link;

        if($req->file('image')){
            $small_file = $req->file('image');
            Storage::putFile('public/img/', $small_file);
            $top->image = "storage/img/".$small_file->hashName();
        }

        $top->save();

        return redirect()->route('top.view');
    }
}
