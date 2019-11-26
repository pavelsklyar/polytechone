<?php

namespace app\controllers;

use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\model\TeamForm;

class SiteController extends Controller
{
    private $component;
    private $model;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }

    public function partners()
    {
        $view = new View("site/partners", $this->page);
    }

    public function join()
    {
        $get = $this->page->getGet();

        $view = new View("site/join", $this->page, ['form' => $get['form']]);
    }

    public function joinTeam()
    {
        $post = $this->page->getPost();

        $form = new TeamForm($post['name'], $post['surname'], $post['email'], $post['phone']);
        var_dump($form);
    }

    public function joinPartner()
    {
        $post = $this->page->getPost();
    }

    public function contacts()
    {
        $view = new View("site/contacts", $this->page);
    }
}