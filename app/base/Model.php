<?php


namespace app\base;


use app\security\Security;
use base\interfaces\ModelInterface;

class Model implements ModelInterface
{
    public function validate()
    {
        $rules = $this->rules();

        foreach ($rules as $field => $rule) {
            switch ($rule) {
                case "required":
                    if (isset($this->$field) && $this->$field !== "") {
                        break;
                    }
                    else {
                        return ['status' => false, 'error' => $rule];
                    }
                case "email":
                    if (preg_match(Security::getEmailRegExp(), $this->$field)) {
                        break;
                    }
                    else {
                        return ['status' => false, 'error' => $rule];
                    }
                case "phone":
                    if (preg_match(Security::getPhoneRegExp(), $this->$field)) {
                        break;
                    }
                    else {
                        return ['status' => false, 'error' => $rule];
                    }
            }
        }

        return ['status' => true, 'error' => null];
    }

    public function rules()
    {
        return [];
    }
}