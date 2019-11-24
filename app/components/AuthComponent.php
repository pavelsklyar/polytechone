<?php

namespace app\components;

use app\base\Component;

class AuthComponent extends Component
{
    public function auth($login, $password)
    {
        $salt = $this->generateSalt();
    }

    public function reg($login, $password, $name, $surname)
    {

    }

    private function generateSalt()
    {
        $salt = '';
        $saltLength = 25;
        for($i = 0; $i < $saltLength; $i++) {
            $salt .= chr(mt_rand(33,126));
        }
        return $salt;
    }
}