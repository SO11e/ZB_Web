<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Report;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

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
        $apiResponse = ApiController::doRequest("GET", "/reports/" . $id, ["bearer" => AuthController::getToken()], []);
        $data = \GuzzleHttp\json_decode($apiResponse->getBody());
        if($apiResponse->getStatusCode() == 404) {
            abort(404);
        }
        $report = new Report($data);
    
        $pdf = PDF::loadView('report.view', [
            'report' => $report
        ])->setOptions(['orientation' => 'landscape', 'margin-left' => 5, 'margin-right' => 5, 'margin-top' => 5, 'margin-bottom' => 5]);
        return $pdf->stream('Rapport.pdf');
    }

    public function showAdd() {

    }

    public function addReport(Request $request) {

    }

    public function showEdit($id) {

        $apiResponse = ApiController::doRequest("GET", "/reports/".$id, ["bearer" => AuthController::getToken()], []);
        $data = \GuzzleHttp\json_decode($apiResponse->getBody());

        $report = new Report($data);

        return view('report.edit', ['report' => $report]);

    }

    public function editReport(Request $request) {
        $id = $request->id;

        $today = date("Y-m-d H:i:s");

        $data = [
            'status' => $request->status,
            'description' => $request->description,
            'dateUpdated' => $today
        ];

        $apiResponse = ApiController::doRequest('PUT', '/reports/'.$id, ["bearer" => AuthController::getToken()], $data);

        return redirect()->route('report.list');

    }

    public function deleteReport($id) {
        $apiResponse = ApiController::doRequest('DELETE', '/reports/'.$id, ["bearer" => AuthController::getToken()], []);

        return redirect()->route('report.list');
    }
}