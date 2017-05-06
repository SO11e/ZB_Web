<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    
    public function showUsers() {
        $apiresponse = ApiController::doRequest('GET', '/users?perPage=200', ["bearer" => AuthController::getToken()], []);
        $userdata = \GuzzleHttp\json_decode($apiresponse->getBody());

        $users = [];
        
        foreach($userdata->data as $user) {
            $users[count($users)] = new User($user);
        }
        
        return view('user.list', ['users' => $users]);
    }
    
    public function showAddUser() {
        return view('user.add');
    }
    public function addUser(Request $request) {
        $this->validata($request, [
            'firstname' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'email' => 'required|email',
            'role' => '',
            'region' => '',
        ]);
    }
    
}
