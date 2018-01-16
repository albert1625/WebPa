<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class LanguageLocalizationController extends Controller
{
    public function index(Request $request){
    	if($request->lang <> ''){
    		app()->setLocale($request->lang);
    		Session::put('locale', $request->lang);
    	}
    	return redirect(url()->previous());
    }
}
