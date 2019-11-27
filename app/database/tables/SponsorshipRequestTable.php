<?php


namespace app\database\tables;


use app\base\Table;

class SponsorshipRequestTable extends Table
{
    public $tableName;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = "sponsorship_requests";
    }
}