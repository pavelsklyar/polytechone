<?php


namespace app\components;


use app\base\Component;
use app\database\tables\AdminsTable;
use app\database\tables\PagesTable;

class AdminComponent extends Component
{
    private $pagesTable;

    public function getPagesList()
    {
        $this->pagesTable = new PagesTable();

        return $this->pagesTable->getAll();
    }
}