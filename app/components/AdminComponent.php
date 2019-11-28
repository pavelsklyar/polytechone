<?php


namespace app\components;


use app\base\Component;
use app\database\tables\AdminsTable;

class AdminComponent extends Component
{
    public function getPagesList()
    {
        $table = new AdminsTable();

        return $table->getPagesList();
    }
}