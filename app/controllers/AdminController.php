<?php


namespace app\controllers;


use app\base\interfaces\Controller;
use app\base\Page;
use app\base\View;

class AdminController implements Controller
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

    public function index()
    {
        if (isset($this->page->session['auth'])) {
            $view = new View("admin/index", $this->page);
        }
        else {
            $view = new View("admin/auth", $this->page);
        }
    }
}