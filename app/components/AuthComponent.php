<?php

namespace app\components;

use app\base\Component;
use app\database\tables\AdminsTable;
use app\model\Admin;

class AuthComponent extends Component
{
    private $table;

    public function auth($email, $password)
    {
        if (!isset($this->table)) {
            $this->table = new AdminsTable();
        }

        $admin = $this->table->getByCondition('email', $email);
        if (isset($admin)) {
            $admin = $admin[0];
            if ($this->checkPassword($password, $admin['password'], $admin['salt'])) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    public function reg($email, $password, $name, $surname)
    {
        $salt = $this->generateSalt();
        $passwordHash = $this->generateHashPassword($password, $salt);

        $admin = new Admin($email, $passwordHash, $salt, $name, $surname);
        if (!isset($this->table)) {
            $this->table = new AdminsTable();
        }

        return $this->table->insert($admin);
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

    private function generateHashPassword($password, $salt)
    {
        $password512 = hash('sha512', $password);
        $salt512 = hash('sha512', $salt);

        return hash('sha512', $password512 . $salt512);
    }

    private function checkPassword($password, $dbpasswod, $dbsalt)
    {
        $checkPassword = $this->generateHashPassword($password, $dbsalt);

        return $checkPassword === $dbpasswod;
    }
}