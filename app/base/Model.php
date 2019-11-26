<?php


namespace app\base;


use base\interfaces\ModelInterface;

class Model implements ModelInterface
{
    public function validate()
    {
        $rules = $this->rules();

        foreach ($rules as $field => $rule) {
//            $this->$field
        }
    }

    public function rules()
    {
        return [];
    }
}