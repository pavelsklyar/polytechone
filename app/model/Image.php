<?php


namespace app\model;


use app\base\Model;

class Image extends Model
{
    public $name;
    public $type;
    public $tmpName;
    public $error;
    public $size;

    public $validate;

    private $allowSizes = ['image/jpeg', 'image/png', 'image/gif'];

    /**
     * Image constructor.
     * @param $name
     * @param $type
     * @param $tmpName
     * @param $error
     * @param $size
     */
    public function __construct($name, $type, $tmpName, $error, $size)
    {
        $this->name = $name;
        $this->type = $type;
        $this->tmpName = $tmpName;
        $this->error = $error;
        $this->size = $size;

        if (!$this->validate()) {
            $this->validate = false;
            return null;
        }
        else {
            $this->validate = true;
        }
    }

    public function validate()
    {
        $type = $this->validateType($this->type);
        $error = $this->validateError($this->error);
        $size = $this->validateSize($this->size);

        return $type && $error && $size;
    }

    public function validateType($type)
    {
        foreach ($this->allowSizes as $allowSize) {
            if ($allowSize === $type)
                return true;
        }

        return false;
    }

    public function validateError($error)
    {
        if ($error)
            return false;
        else
            return true;
    }

    public function validateSize($size)
    {
        if ($size)
            return true;
        else
            return false;
    }
}