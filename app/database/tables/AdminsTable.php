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

    public function getAdminsList()
    {
        $sql = "SELECT `name`, `surname`, `email` FROM `admins`";

        return $this->database->getQueryArray($sql);
    }
}