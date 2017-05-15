<?php

namespace App\Models;

class Issue {
    public $id;
    public $streetName;
    public $houseNumber;
    public $postalCode;
    public $place;
    public $region;
    public $status;
    public $description;
    public $dateCreated;
    public $dateResolved;
    public $latitude;
    public $longitude;

    public function __construct($data){

        $this->id = isset($data->_id) ? $data->_id : '';
        $this->streetName = isset($data->streetName) ? $data->streetName : 'Niet opgegeven';
        $this->houseNumber = isset($data->houseNumber) ? $data->houseNumber : '';
        $this->postalCode = isset($data->postalCode) ? $data->postalCode : 'Niet opgegeven';
        $this->place = isset($data->place) ? $data->place : 'Niet opgegeven';
        $this->region = isset($data->region) ? $data->region : 'Geen regio opgegeven';
        $this->status = isset($data->status) ? $data->status : 'Onbekend';
        $this->description = isset($data->description) ? $data->description : 'Niet opgegeven';
        $this->dateCreated = isset($data->dateCreated) ? $data->dateCreated : 'Niet opgegeven';
        $this->dateResolved = isset($data->dateResolved) ? $data->dateResolved : 'Nog niet opgelost';
        $this->latitude = isset($data->latitude) ? $data->latitude : '';
        $this->longitude = isset($data->longitude) ? $data->longitude : '';
    }

}
