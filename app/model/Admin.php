<?php

namespace app\model;

use app\base\Model;

class Admin extends Model
{
    public $email;
    public $password;
    public $salt;
    public $name;
    public $surname;

    /**
     * Admin constructor.
     * @param $email
     * @param $password
     * @param $salt
     * @param $name
     * @param $surname
     */
    public function __construct($email, $password, $salt, $name = null, $surname = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->salt = $salt;
        $this->name = $name;
        $this->surname = $surname;

        $validate = $this->validate();
        if (!$validate['status']) {
            return null;
        }
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
            'salt' => ['required'],
            'name' => ['string'],
            'surname' => ['string']
        ];
    }
}