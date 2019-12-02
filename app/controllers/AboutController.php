<?php


namespace app\controllers;


use app\base\Controller;
use app\base\Page;
use app\base\Path;
use app\base\View;
use app\components\PageComponent;

class AboutController extends Controller
{
    private $pageComponent;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function history()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("about/history", $this->page, ['title' => $title,'content' => $content]);
    }

    public function tests()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("about/tests", $this->page, ['title' => $title,'content' => $content]);
    }

    public function training()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("about/training", $this->page, ['title' => $title,'content' => $content]);
    }

    public function firstrace()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("about/firstrace", $this->page, ['title' => $title,'content' => $content]);
    }

    public function lineup()
    {
        $view = new View("about/lineup", $this->page);
    }

    public function prospects()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("about/prospects", $this->page, ['title' => $title,'content' => $content]);
    }
}