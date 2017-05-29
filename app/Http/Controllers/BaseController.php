<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {
    
    function __construct() {
        $this->middleware(function ($request, $next) {
            $user = session("auth_user");
            View::share('userdata', $user);
        
            return $next($request);
        });
    }
}