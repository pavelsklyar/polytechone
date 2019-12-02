<?php

namespace app\controllers;

use app\base\Controller;
use app\base\Page;
use app\base\Path;
use app\base\View;
use app\components\FormsComponent;
use app\components\PageComponent;
use app\model\SponsorshipForm;
use app\model\TeamForm;

class SiteController extends Controller
{
    private $pageComponent;
    private $component;
    private $model;

    public function __construct(Page &$page, $params)
    {
        parent::__construct($page, $params);
    }

    public function index()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("site/index", $this->page, ['title' => $title,'content' => $content]);
    }

    public function partners()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("site/partners", $this->page, ['title' => $title,'content' => $content]);
    }

    public function join()
    {
        $get = $this->page->getGet();

        $view = new View("site/join", $this->page, ['form' => $get['form']]);
    }

    public function joinTeam()
    {
        $this->component = new FormsComponent();

        $post = $this->page->getPost();

        $form = new TeamForm($post['name'], $post['surname'], $post['email'], $post['phone']);
        if (isset($form->status)) {
            $view = new View("site/join", $this->page, ['form' => 'team', 'error' => $form->status['error'], 'data' => $post]);
            return;
        }

        if ($this->component->joinTeam($form)) {
            $view = new View("site/join_success", $this->page);
        }
        else {
            $view = new View("errors/join", $this->page);
        }
    }

    public function joinPartner()
    {
        $this->component = new FormsComponent();

        $post = $this->page->getPost();

        $form = new SponsorshipForm($post['name'], $post['surname'], $post['company'], $post['email'], $post['phone']);
        if (isset($form->status)) {
            $view = new View("site/join", $this->page, ['form' => 'partner', 'error' => $form->status['error'], 'data' => $post]);
            return;
        }

        if ($this->component->joinSponsorship($form)) {
            $view = new View("site/join_success", $this->page);}
        else {
            $view = new View("errors/join", $this->page);
        }
    }

    public function contacts()
    {
        $this->pageComponent = new PageComponent();
        $path = new Path();

        $page = $this->pageComponent->getContent($path->getUrl());
        $title = $page['title'];
        $content = $page['content'];

        $view = new View("site/contacts", $this->page, ['title' => $title,'content' => $content]);
    }
}