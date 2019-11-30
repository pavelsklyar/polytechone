<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\Path;
use app\base\View;
use app\components\AdminComponent;
use app\components\AuthComponent;
use app\model\Admin;

class AdminController extends Controller
{
    private $component;

    public function beforeAction()
    {
        $path = new Path();
        if (!isset($this->page->session['auth'])) {
            if (count($path->getPath()) == 3)
                $view = new View("admin/auth", $this->page);
            else
                header("Location: /admin/");
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
            $sitePages = $this->component->getPagesList();
            $view = new View("admin/index", $this->page, ['sitePages' => $sitePages]);
        }
        else {
            $view = new View("admin/auth", $this->page);
        }
    }

    public function edit()
    {
        $pageName = $this->params['page'];

        $data = explode('-', $pageName);
        $count = count($data);
        unset($data);

        if (isset($pageName)) {
            if ($pageName == 'index' || $count < 2) {
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
        $this->component = new AdminComponent();
        $team = $this->component->getTeam();

        $view = new View('admin/team', $this->page, ['team' => $team]);
    }

    public function requests()
    {
        $get = $this->page->getGet();

        $this->component = new AdminComponent();
        $team = $this->component->getTeamRequests();
        $sponsor = $this->component->getSponsorshipRequests();

        $view = new View('admin/requests', $this->page, ['team' => $team, 'sponsor' => $sponsor, 'table' => $get['table']]);
    }

    public function admins()
    {
        $this->component = new AdminComponent();
        $admins = $this->component->getAdmins();

        $view = new View('admin/admins', $this->page, ['admins' => $admins]);
    }

    public function adminsForm()
    {
        $this->component = new AdminComponent();

        $view = new View('admin/admins/add', $this->page);
    }

    public function adminsAdd()
    {
        $post = $this->page->getPost();

        $this->component = new AuthComponent();
        $this->component->reg($post['email'], $post['password'], $post['name'], $post['surname']);

        header("Location: /admin/admins/ ");
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