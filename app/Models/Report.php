<?php

namespace App\Models;

class Report{

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
        $this->createBy = isset($data->createBy) ? new User($data->createdBy) : null;
        if(isset($data->issues)) {
            foreach ($data->issues as $issue) {
                $this->issues[count($this->issues)] = new Issue($issue);
            }
        }
    }


}