<?php

namespace App\Models;

class Region {
    public $id;
    public $name;
    public $manager;
    public $postalCodes;
    public $isActive;
    
    function __construct($data) {
        $this->id = isset($data->_id) ? $data->_id : null;
        $this->name = isset($data->name) ? $data->name : null;
        $this->manager = isset($data->manager) ? new User($data->manager) : null;
        $this->postalCodes = isset($data->postalCodes) ? $data->postalCodes : null;
        $this->isActive = isset($data->isActive) ? (boolean) $data->isActive : false;
    }
}