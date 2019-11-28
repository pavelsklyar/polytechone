<?php

namespace app\database\tables;

use app\base\Table;

class AdminsTable extends Table
{
    public $tableName;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = "admins";
    }

    public function getPagesList()
    {
        $sql = "SELECT DISTINCT `url` FROM `content`";

        return $this->database->getQueryArray($sql);
    }
}