<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\components\AuthComponent;

class AdminController extends Controller
{
    private $component;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        if (isset($this->page->session['auth'])) {
            $view = new View("admin/index", $this->page);
        }
        else {
            $view = new View("admin/auth", $this->page);
        }
    }

    public function auth()
    {
        $login = $this->page->getPost()['login'];
        $password = $this->page->getPost()['password'];

        var_dump($login, $password);

        $this->component = new AuthComponent();
    }
}