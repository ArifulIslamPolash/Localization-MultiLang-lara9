<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\LangController;
use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function lang(){
        return view('lang');
    }
    public function lang_change (Request $request){
        App::setlocale($request->lang);
        session()->put('lang_code', $request->lang);
        return redirect()->back();
    }
}
