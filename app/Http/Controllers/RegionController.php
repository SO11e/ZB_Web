<?php

namespace App\Http\Controllers;

class RegionController extends Controller {
    
    private $regions = [
        1000 => [
            'id' => 1000,
            'name' => 'Breda 1',
            'manager' => 'Pieter Derkse',
            'members' => 8,
            'zipcodes' => ['1234AA', '1235AB','1236AC','1237AD','1238AE','1239AF','1240AG','1241AH','1242AI'],
            'active' => true,
        ],
        1001 => [
            'id' => 1001,
            'name' => 'Breda 2',
            'manager' => 'Petra Dijkstra',
            'members' => 12,
            'zipcodes' => ['1334AA', '1335AB','1336AC','1337AD','1338AE','1339AF','1340AG','1341AH','1342AI'],
            'active' => false,
        ],
        1002 => [
            'id' => 1002,
            'name' => 'Breda 3',
            'manager' => 'Johan de Jong',
            'members' => 15,
            'zipcodes' => ['1434AA', '1435AB','1436AC','1437AD','1438AE','1439AF','1440AG','1441AH','1442AI'],
            'active' => true,
        ],
    ];
    
    public function showAllRegions() {
        return view('region.list', ['regions' => $this->regions]);
    }
    
    public function showAddRegion() {
        return view('region.add');
    }
    public function showEditRegion($id) {
        return view('region.edit', ['region' => $this->regions[$id]]);
    }
}