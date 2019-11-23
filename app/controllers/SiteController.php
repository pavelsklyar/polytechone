<?php

namespace app\controllers;

use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;
use app\components\VerbsComponent;

class SiteController implements Controller
{
    private $page;
    private $params;
    private $component;
    private $model;

    /**
     * MainController constructor.
     * @param $page Page
     * @param $params array
     */
    public function __construct(Page &$page, $params)
    {
        $this->page = $page;
        $this->params = $params;
    }

    public function index()
    {
        $view = new View("site/index", $this->page);
    }

    public function partners()
    {
        $view = new View("site/partners", $this->page);
    }

    public function contacts()
    {
        $view = new View("site/contacts", $this->page);
    }
}