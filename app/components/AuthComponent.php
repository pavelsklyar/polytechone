<?php

namespace app\components;

use app\base\Component;
use app\database\tables\AdminsTable;
use app\model\Admin;

class AuthComponent extends Component
{
    private $table;

    public function __construct()
    {
        if (!isset($this->table)) {
            $this->table = new AdminsTable();
        }
    }

    public function auth($email, $password)
    {
        $admin = $this->table->getByCondition('email', $email);
        if (isset($admin)) {
//            var_dump($admin);
//            var_dump($password);
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

        return $this->table->insert($admin);
    }

    public function delete($id)
    {
        return $this->table->deleteByCondition('id', $id);
    }

    public function updateEmail($id, $oldEmail, $newEmail)
    {
        $admin = $this->table->getByCondition('id', $id);

        if ($oldEmail !== $admin[0]['email'])
            return null;

        return $this->table->update('id', $id, ['email' => $newEmail]);
    }

    public function updatePassword($id, $oldPassword, $newPassword)
    {
        $admin = $this->table->getByCondition('id', $id);

        $oldHashPassword = hash("sha512", hash("sha512", $oldPassword) . hash("sha512", $admin[0]['salt']));
        if ($oldHashPassword !== $admin[0]['password'])
            return null;

        $newHashPassword = hash("sha512", hash("sha512", $newPassword) . hash("sha512", $admin[0]['salt']));

        return $this->table->update('id', $id, ['password' => $newHashPassword]);
    }

    private function generateSalt()
    {
        $salt = '';
        $saltLength = 25;
        for($i = 0; $i < $saltLength; $i++) {
            $rand = mt_rand(33,126);

            if ($rand == 34 || $rand == 39)
                $i -= 1;
            else
                $salt .= chr($rand);
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