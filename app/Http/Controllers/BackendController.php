<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
     public function dashboardfun($value='')
    {
       // $route= Route::current();
        //dd($route);
    	return view('backend.dashboard');
    }
}
