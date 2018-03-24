<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function store(Request $request){
        $name = $request->name;
        echo "Thanks for contacting us.";
    }
}
