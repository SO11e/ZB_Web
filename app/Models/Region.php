<?php

namespace App\Models;

class Region {
    public $id;
    public $name;
    public $adminuser;
    public $postalCodes;
    public $isActive;
    
    function __construct($data) {
        $this->id = isset($data->_id) ? $data->_id : '';
        $this->name = isset($data->name) ? $data->name : '';
        $this->adminuser = isset($data->manager) ? $data->manager : '';
        $this->postalCodes = isset($data->postalCodes) ? $data->postalCodes : '';
        $this->isActive = isset($data->isActive) ? (boolean) $data->isActive : false;
    }
}