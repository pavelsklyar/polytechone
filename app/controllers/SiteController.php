<?php

namespace app\controllers;

use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\components\VerbsComponent;

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
        $view = new View("site/join", $this->page);
    }

    public function contacts()
    {
        $view = new View("site/contacts", $this->page);
    }
}