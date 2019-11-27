<?php


namespace app\model;


use app\base\Model;

class SponsorshipForm extends Model
{
    public $name;
    public $surname;
    public $company;
    public $email;
    public $phone;

    /**
     * TeamRequest constructor.
     * @param $name
     * @param $surname
     * @param $email
     * @param $phone
     */
    public function __construct($name, $surname, $company, $email, $phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->company = $company;
        $this->email = $email;
        $this->phone = $phone;

        $validate = $this->validate();
        if (!$validate['status']) {
            return null;
        }
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'company' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required']
        ];
    }
}