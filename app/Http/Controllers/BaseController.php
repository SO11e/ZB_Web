<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\View;

class BaseController extends Controller {
    function __construct() {
        //Make User object available in every view
//        $user = AuthController::getUser();
//        
//        View::share('user', $user);
    }
}