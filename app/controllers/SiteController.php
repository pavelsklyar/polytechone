<?php

namespace app\controllers;

use app\base\Controller;
use app\base\Page;
use app\base\View;
use app\components\FormsComponent;
use app\model\SponsorshipForm;
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
        $view = new View("site/contacts", $this->page);
    }
}