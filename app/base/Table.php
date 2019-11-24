<?php


namespace app\base;

use base\interfaces\TableInterface;
use Database;

class Table implements TableInterface
{
    public $tableName;
    private $database;

    /**
     * Table constructor.
     * @param $tableName
     */
    public function __construct()
    {
        $this->database = new Database();
    }


    /**
     * @param $object // Any class which implements Model
     * @return bool
     */
    public function insert($object): bool
    {
        // TODO: Implement insert() method.
    }

    /**
     * @param $object // Any class which implements Model
     * @param string $condition // Name of condition
     * @param string|number $conditionValue // Value of condition
     * @return bool
     */
    public function update($object, $condition, $conditionValue): bool
    {
        // TODO: Implement update() method.
    }

    /**
     * @return bool
     */
    public function deleteAll(): bool
    {
        // TODO: Implement deleteAll() method.
    }

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return bool
     */
    public function deleteByCondition($condition, $conditionValue): bool
    {
        // TODO: Implement deleteByCondition() method.
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        $sql = "SELECT * FROM `{$this->tableName}`";

        return $this->database->getQueryArray($sql);
    }

    /**
     * @param string $condition
     * @param string|number $conditionValue
     * @return array
     */
    public function getByCondition($condition, $conditionValue): array
    {
        $sql = "SELECT * FROM `{$this->tableName}` WHERE `$condition` = '$conditionValue'";

        return $this->database->getQueryArray($sql);
    }
}