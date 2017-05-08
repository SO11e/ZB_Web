<?php

namespace App\Models;

class User {
    public $id;
    public $email;
    public $region;
    public $role;
    
    function __construct($data) {
        $this->id = isset($data->_id) ? $data->_id : '';
        $this->email = isset($data->email) ? $data->email : '';
        $this->region = isset($data->region) ? $data->region : '';
        $this->role = isset($data->roles) ? $data->roles : '';
    }
}