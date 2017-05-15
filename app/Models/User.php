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
    
    function __construct($data) {
        $this->id = isset($data->_id) ? $data->_id : '';
        $this->email = isset($data->email) ? $data->email : '';
        $this->firstname = isset($data->firstname) ? $data->firstname : '';
        $this->lastname = isset($data->lastname) ? $data->lastname : '';
        $this->street = isset($data->street) ? $data->street : '';
        $this->housenumber = isset($data->housenumber) ? $data->housenumber : '';
        $this->zipcode = isset($data->zipcode) ? $data->zipcode : '';
        $this->city = isset($data->city) ? $data->city : '';
        $this->region = isset($data->region) ? $data->region : '';
        $this->role = isset($data->roles) ? $data->roles : '';
    }
}