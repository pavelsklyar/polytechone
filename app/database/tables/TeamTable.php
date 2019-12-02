<?php


namespace app\database\tables;


use app\base\Table;

class TeamTable extends Table
{
    public $tableName;

    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'team';
    }

    public function updatePositionNumber($positionNumber)
    {
        $sql = "
            UPDATE
                `{$this->tableName}`
            SET
                `position_number` = `position_number` + 1
            WHERE
                `position_number` >= '{$positionNumber}'
        ";

        return $this->database->query($sql);
    }
}