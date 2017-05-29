<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends BaseController {

    public function showOverview() {

        $apiResponse = ApiController::doRequest("GET", "/issues?perPage=200", ["bearer" => AuthController::getToken()], []);
        $data = \GuzzleHttp\json_decode($apiResponse->getBody());

        $issues = [];

        foreach ($data->data as $value){
            $issues[count($issues)] = new Issue($value);
        }

        return view('issue.list', ['issues' => $issues]);
    }

    public function showDetail($id){

        $issue = $this->getOneIssue($id);

        return view('issue.view', ['issue' => $issue]);
    }

    public function showEditIssue($id){
        $issue = $this->getOneIssue($id);

        return view('issue.edit', ['issue' => $issue]);
    }

    public function editIssue(Request $request){

        $id = $request->id;

        $data = [
            'status' => $request->status,
            'description' => $request->description,
            'dateResolved' => $request->dateResolved,
            'region' => $request->region
        ];

        $apiResponse = ApiController::doRequest('PUT', '/issues/'.$id, ["bearer" => AuthController::getToken()], $data);

        return redirect()->route('issue.list');
    }

    public function deleteIssue($id){
        $apiResonse = ApiController::doRequest('DELETE', '/issues/'.$id, ["bearer" => AuthController::getToken()], []);

        return redirect()->route('issue.list');
    }

    private function getOneIssue($id){
        $apiResponse = ApiController::doRequest("GET", "/issues/".$id, ["bearer" => AuthController::getToken()], []);
        $parsedData = \GuzzleHttp\json_decode($apiResponse->getBody());

        $issue = new Issue($parsedData);

        return $issue;
    }

}