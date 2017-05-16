<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Region;
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
        return view('region.add');
    }
    public function addRegion(Request $request) {
        $data = [
            'name' => $request->name,
            'isActive' => isset($request->isActive),
            'postalCodes' => explode(",", $request->postalCodes),
        ];
    
        $apiresponse = ApiController::doRequest('POST', '/regions', ["bearer" => AuthController::getToken()], $data);
    
        return redirect()->route('region.list');
    }
    
    public function showEditRegion($id) {
        return view('region.edit', ['region' => $this->regions[$id]]);
    }
}