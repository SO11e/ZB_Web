<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;

class DashboardController extends BaseController {
    
    public function index() {
        $apiresponse = ApiController::doRequest('GET', '/issues?perPage=200', ["bearer" => AuthController::getToken()], []);
        $issuedata = \GuzzleHttp\json_decode($apiresponse->getBody());
        
        $issuecount = 0;
        foreach($issuedata->data as $issue) {
            if(isset($issue->status) && $issue->status == 'open')
                $issuecount++;
        }
    
        $apiresponse2 = ApiController::doRequest('GET', '/reports?perPage=200', ["bearer" => AuthController::getToken()], []);
        $reportdata = \GuzzleHttp\json_decode($apiresponse2->getBody());
    
        $createdreports = 0;
        $sentreports = 0;
        foreach($reportdata->data as $report) {
            if(isset($report->status) && $report->status == 'created')
                $createdreports++;
            
            if(isset($report->status) && $report->status == 'send')
                $sentreports++;
        }
        
        return view('dashboard', [
            'issuecount' => $issuecount,
            'createdreports' => $createdreports,
            'sentreports' => $sentreports,
        ]);
    }
}
