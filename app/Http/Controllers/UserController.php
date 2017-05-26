<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController {
    
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
        $apiresponse = ApiController::doRequest('GET', '/regions?perPage=200', ["bearer" => AuthController::getToken()], []);
        $regiondata = \GuzzleHttp\json_decode($apiresponse->getBody());
    
        $regions = [];
    
        foreach($regiondata->data as $region) {
            $regions[count($regions)] = new Region($region);
        }
        
        return view('user.add', ['regions' => $regions]);
    }
    public function addUser(Request $request) {
        $this->validate($request, [
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'email' => 'email|required',
            'street' => 'string',
            'housenumber' => 'integer',
            'zipcode' => [
                'string',
                'regex:/^[1-9][0-9]{3} ?(?!sa|sd|ss)[A-Z]{2}$/'
            ],
            'city' => 'string',
            'role' => [
                'string',
                'required',
                'regex:/admin|user/'
            ],
            'region' => 'string|required',
        ]);
        
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->email, //TODO: Change to random password
            'street' => $request->street,
            'housenumber' => $request->housrnumber,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'roles' => $request->role,
            'region' => $request->region
        ];
    
        ApiController::doRequest('POST', '/users', ["bearer" => AuthController::getToken()], $data);
        
        return redirect()->route('user.list');
    }
    
    public function showEditUser($id) {
        $apiresponse_user = ApiController::doRequest('GET', '/user/' . $id, ["bearer" => AuthController::getToken()], []);
        $userdata = \GuzzleHttp\json_decode($apiresponse_user->getBody());
        
        
        
        $apiresponse = ApiController::doRequest('GET', '/regions?perPage=200', ["bearer" => AuthController::getToken()], []);
        $regiondata = \GuzzleHttp\json_decode($apiresponse->getBody());
        
        $regions = [];
        
        foreach($regiondata->data as $region) {
            $regions[count($regions)] = new Region($region);
        }
        
        return view('user.edit', ['regions' => $regions]);
    }
    public function editUser(Request $request) {
        $this->validate($request, [
            'firstname' => 'string|required',
            'lastname' => 'string|required',
            'email' => 'email|required',
            'street' => 'string',
            'housenumber' => 'integer',
            'zipcode' => [
                'string',
                'regex:/^[1-9][0-9]{3} ?(?!sa|sd|ss)[A-Z]{2}$/'
            ],
            'city' => 'string',
            'role' => [
                'string',
                'required',
                'regex:/admin|user/'
            ],
            'region' => 'string|required',
        ]);
        
        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->email, //TODO: Change to random password
            'street' => $request->street,
            'housenumber' => $request->housrnumber,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'roles' => $request->role,
            'region' => $request->region
        ];
        
        ApiController::doRequest('POST', '/users', ["bearer" => AuthController::getToken()], $data);
        
        return redirect()->route('user.list');
    }
    
}
