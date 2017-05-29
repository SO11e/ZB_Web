<?php

namespace App\Models;

class IssueReport{

    public $id;
    public $description;
    public $status;
    public $dateCreated;
    public $dateUpdated;
    public $createBy;
    public $issues = [];

    public function __construct($data){
        $this->id = isset($data->_id) ? $data->_id : null;
        $this->description = isset($data->description) ? $data->description : null;
        $this->status = isset($data->status) ? $data->status : null;
        $this->dateCreated = isset($data->dateCreated) ? $data->dateCreated : null;
        $this->dateUpdated = isset($data->dateUpdated) ? $data->dateUpdated : null;
        $this->createBy = isset($data->createBy) ? new User($data->createBy) : null;
        $this->issues = isset($data->issues) ? new Issue($data->issues) : null;
    }


}