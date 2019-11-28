<?php


namespace app\database\tables;


use app\base\Table;

class PagesTable extends Table
{
    public $tableName;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'pages';
    }
}