<?php

namespace App\Http\Controllers;

class IssueController extends Controller {

    public function showOverview() {
        if(session("auth_token", null) == null){ return false; }

        $apiResponse = ApiController::doRequest("GET", "/issues", ["bearer" => session("auth_token")], []);

        if($apiResponse->getStatusCode() == 200){echo "WOOHOO";}

        return view('issues_overview');
    }

    public function showDetail($id){
        return view('issue_detail');
    }
}