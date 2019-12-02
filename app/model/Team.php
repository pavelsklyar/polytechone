<?php


namespace app\model;


use app\base\Model;

class Team extends Model
{
    public $name;
    public $department;
    public $position;
    public $position_number;
    public $photo;

    /**
     * Team constructor.
     * @param $name
     * @param $department
     * @param $position
     * @param $position_number
     * @param $photo
     */
    public function __construct($name, $department, $position, $position_number, $photo = null)
    {
        $this->name = $name;
        $this->department = $department;
        $this->position = $position;
        $this->position_number = $position_number;
        $this->photo = $photo;
    }


}