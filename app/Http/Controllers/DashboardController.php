<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;

class DashboardController extends Controller {
    
    public function index() {
        $apiresponse = ApiController::doRequest('GET', '/users/me', ["bearer" => AuthController::getToken()], []);
        $userdata = \GuzzleHttp\json_decode($apiresponse->getBody());
        
        return view('dashboard', ['user' => $userdata]);
    }
}
