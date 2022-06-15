<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user() && Auth::user()->role_id == 3)
        {
            Redirect::to('/conferances')->send();
        }
        else if(Auth::user() && Auth::user()->role_id == 5)
        {
            Redirect::to('/revisions')->send();
        }
        
        else{
            return view('welcome');
        }
    }
}
