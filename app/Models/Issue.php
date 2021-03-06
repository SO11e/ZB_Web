<?php

namespace App\Models;

class Issue {
    public $id;
    public $streetName;
    public $city;
    public $houseNumber;
    public $postalCode;
    public $region;
    public $status;
    public $description;
    public $dateCreated;
    public $dateResolved;
    public $latitude;
    public $longitude;
    public $image;
    public $thumbnail;

    public function __construct($data){
        $this->id = isset($data->_id) ? $data->_id : null;
        $this->streetName = isset($data->streetName) ? $data->streetName : null;
        $this->city = isset($data->city) ? $data->city : null;
        $this->houseNumber = isset($data->houseNumber) ? $data->houseNumber : null;
        $this->postalCode = isset($data->zipCode) ? $data->zipCode : null;
        $this->region = isset($data->region) ? new Region($data->region) : null;
        $this->status = isset($data->status) ? $data->status : null;
        $this->description = isset($data->description) ? $data->description : null;
        $this->dateCreated = isset($data->dateCreated) ? $data->dateCreated : null;
        $this->dateResolved = isset($data->dateResolved) ? $data->dateResolved : null;
        $this->latitude = isset($data->latitude) ? $data->latitude : null;
        $this->longitude = isset($data->longitude) ? $data->longitude : null;
        $this->image = isset($data->fullimage) ? $data->fullimage : null;
        $this->thumbnail = isset($data->thumbnail) ? $data->thumbnail : null;
    }

}
