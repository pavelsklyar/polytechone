<?php


namespace app\controllers;


use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;

class AboutController implements Controller
{
    private $page;
    private $params;

    /**
     * Controller constructor.
     * @param Page $page - объект страницы
     * @param $params - массив параметров из url
     */
    public function __construct(Page &$page, $params)
    {
        $this->page = $page;
        $this->params = $params;
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