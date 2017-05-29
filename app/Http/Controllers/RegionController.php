<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class RegionController extends BaseController {
    
    public function showRegions() {
        $apiresponse = ApiController::doRequest('GET', '/regions?perPage=200', ["bearer" => AuthController::getToken()], []);
        $regiondata = \GuzzleHttp\json_decode($apiresponse->getBody());
    
        $regions = [];
    
        foreach($regiondata->data as $region) {
            $regions[count($regions)] = new Region($region);
        }
    
        return view('region.list', ['regions' => $regions]);
    }
    
    public function showAddRegion() {
        $apiresponse = ApiController::doRequest('GET', '/users?perPage=200', ["bearer" => AuthController::getToken()], []);
        $userdata = \GuzzleHttp\json_decode($apiresponse->getBody());
    
        $users = [];
    
        foreach($userdata->data as $user) {
            $users[count($users)] = new User($user);
        }
        
        return view('region.add', ['users' => $users]);
    }
    public function addRegion(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|min:3',
            'manager' => 'required|string|min:3',
            'postalCodes' => 'required|string|min:6'
        ]);
        
        $data = [
            'name' => $request->name,
            'isActive' => isset($request->isActive),
            'manager' => $request->manager,
            'postalCodes' => explode(",", preg_replace('/\s+/', '', $request->postalCodes))
        ];
    
        ApiController::doRequest('POST', '/regions', ["bearer" => AuthController::getToken()], $data);
    
        return redirect()->route('region.list');
    }
    
    public function showEditRegion($id) {
        $apiresponse = ApiController::doRequest('GET', '/regions/' . $id, ["bearer" => AuthController::getToken()], []);
        $regiondata = \GuzzleHttp\json_decode($apiresponse->getBody());
        $region = new Region($regiondata);
        
        $apiresponse2 = ApiController::doRequest('GET', '/users?perPage=200', ["bearer" => AuthController::getToken()], []);
        $userdata = \GuzzleHttp\json_decode($apiresponse2->getBody());
        
        $users = [];
        
        foreach($userdata->data as $user) {
            $users[count($users)] = new User($user);
        }
        
        return view('region.edit', [
            'region' => $region, 
            'users' => $users
        ]);
    }
    public function editRegion(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|min:3',
            'manager' => 'required|string|min:3',
            'postalCodes' => 'required|string|min:6'
        ]);
        
        $data = [
            'name' => $request->name,
            'isActive' => isset($request->isActive),
            'manager' => $request->manager,
            'postalCodes' => explode(",", preg_replace('/\s+/', '', $request->postalCodes))
        ];
        
        ApiController::doRequest('PUT', '/regions/' . $request->id, ["bearer" => AuthController::getToken()], $data);
        
        return redirect()->route('region.list');
    }
}