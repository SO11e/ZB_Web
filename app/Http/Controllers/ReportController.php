<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Report;
use App\Models\Issue;
use Illuminate\Http\Request;

class ReportController extends BaseController {

    public function showOverview() {
        $apiResponse = ApiController::doRequest("GET", "/reports?perPage=200", ["bearer" => AuthController::getToken()], []);
        $data = \GuzzleHttp\json_decode($apiResponse->getBody());

        $reports = [];

        foreach ($data->data as $value) {
            $reports[count($reports)] = new Report($value);
        }

        return view('report.list', ['reports' => $reports]);
    }

    public function showDetail($id) {

    }

    public function showAdd() {

    }

    public function addReport(Request $request) {

    }

    public function showEdit($id) {

    }

    public function editReport(Request $request) {
        $id = $request->id;

        $data = [];


    }

    public function deleteReport($id) {
        $apiResonse = ApiController::doRequest('DELETE', '/reports/'.$id, ["bearer" => AuthController::getToken()], []);

        return redirect()->route('report.list');
    }
}