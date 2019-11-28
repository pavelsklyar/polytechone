<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\components\AdminComponent;
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
        if (isset($this->page->session['auth'])) {
            $this->component = new AdminComponent();
            $urls = $this->component->getPagesList();
            $view = new View("admin/index", $this->page, ['urls' => $urls]);
        }
        else {
            $view = new View("admin/auth", $this->page);
        }
    }

    public function edit()
    {
        $pageName = $this->params['page'];

        if (isset($pageName)) {
            if ($pageName == 'index') {
                $view = new View("site/" . $pageName, $this->page, ['edit' => true]);
            }
            else {
                $pageName = str_replace('-', '/', $pageName);
                $view = new View($pageName, $this->page, ['edit' => true]);
            }
        }
    }

    public function team()
    {
        $view = new View('admin/team', $this->page, ['edit' => true]);
    }

    public function requests()
    {
        $view = new View('admin/requests', $this->page);
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