<?php


namespace app\database\tables;


use app\base\Table;

class ContentTable extends Table
{
    public $tableName;
    public $pagesTable;

    /**
     * ContentTable constructor.
     * @param $tableName
     */
    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'content';
        $this->pagesTable = new PagesTable();
    }


}