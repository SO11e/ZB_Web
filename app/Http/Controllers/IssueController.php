<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Issue;

class IssueController extends Controller {

    public function showOverview() {

        $apiResponse = ApiController::doRequest("GET", "/issues?perPage=200", ["bearer" => AuthController::getToken()], []);
        $data = \GuzzleHttp\json_decode($apiResponse->getBody());

        $issues = [];

        foreach ($data->data as $value){
            print_r($value);
            $issues[count($issues)] = new Issue($value);
        }

        return view('issues_overview', ['issues' => $issues]);
    }

    public function showDetail($id){

        $apiResponse = ApiController::doRequest("GET", "/issue/".$id, ["bearer" => AuthController::getToken()], []);
        $parsedData = \GuzzleHttp\json_decode($apiResponse->getBody());

        $issue = new Issue($parsedData);

        return view('issue_detail', ['issue' => $issue]);
    }
}