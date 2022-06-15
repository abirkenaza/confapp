<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class EditeurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {

            $this->user = Auth::user();
            if($this->user->active == 0) 
            {
                Redirect::to('/accountconfirmation')->send();
            }
            return $next($request);
        });
    }
    
}
