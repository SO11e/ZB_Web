<?php

namespace App\Models;

class User {
    public $id;
    public $email;
    public $firstname;
    public $lastname;
    public $street;
    public $housenumber;
    public $zipcode;
    public $city;
    public $region;
    public $role;
    
    public $fullname;
    
    function __construct($data) {
        $this->id = isset($data->_id) ? $data->_id : null;
        $this->email = isset($data->email) ? $data->email : null;
        $this->firstname = isset($data->firstname) ? $data->firstname : null;
        $this->lastname = isset($data->lastname) ? $data->lastname : null;
        $this->fullname = $this->firstname . ' ' . $this->lastname;
        $this->street = isset($data->street) ? $data->street : null;
        $this->housenumber = isset($data->housenumber) ? $data->housenumber : null;
        $this->zipcode = isset($data->zipcode) ? $data->zipcode : null;
        $this->city = isset($data->city) ? $data->city : null;
        $this->region = isset($data->region) ? $data->region : null;
        $this->role = isset($data->roles) ? $data->roles : null;
    }
}