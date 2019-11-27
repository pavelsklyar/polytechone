<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\components\AuthComponent;

class AdminController extends Controller
{
    private $component;

    public function beforeAction()
    {
        if (!isset($this->page->session['auth'])) {
            $view = new View("admin/auth", $this->page);
        }
    }

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        var_dump($this->page->session);

        if (isset($this->page->session['auth'])) {
            $view = new View("admin/index", $this->page);
        }
        else {
            $view = new View("admin/auth", $this->page);
        }
    }

    public function auth()
    {
        $email = $this->page->getPost()['email'];
        $password = $this->page->getPost()['password'];

        $this->component = new AuthComponent();
        if ($this->component->auth($email, $password)) {
            $this->page->session['auth'] = true;
        }

        header("Location: /admin/");
    }
}