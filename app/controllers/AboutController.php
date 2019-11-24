<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\View;

class AboutController extends Controller
{

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function history()
    {
        $view = new View("about/history", $this->page);
    }

    public function tests()
    {
        $view = new View("about/tests", $this->page);
    }

    public function training()
    {
        $view = new View("about/training", $this->page);
    }

    public function firstrace()
    {
        $view = new View("about/firstrace", $this->page);
    }

    public function lineup()
    {
        $view = new View("about/lineup", $this->page);
    }

    public function prospects()
    {
        $view = new View("about/prospects", $this->page);
    }
}