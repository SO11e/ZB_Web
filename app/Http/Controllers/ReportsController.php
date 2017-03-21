<?php

namespace App\Http\Controllers;

class ReportsController extends Controller {
    public function showOverview() {
        return view('reports_overview');
    }

    public function showDetail($id){
        return view('reports_detail');
    }
}