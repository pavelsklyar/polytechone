<?php


namespace app\model;


use app\base\Model;

class TeamRequest extends Model
{
    public $name;
    public $surname;
    public $email;
    public $phone;

    /**
     * TeamRequest constructor.
     * @param $name
     * @param $surname
     * @param $email
     * @param $phone
     */
    public function __construct($name, $surname, $email, $phone)
    {


        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required']
        ];
    }
}