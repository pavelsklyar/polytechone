<?php


namespace app\controllers\admin;


use app\base\Controller;
use app\base\Page;
use app\base\Path;
use app\base\View;
use app\components\AdminComponent;

class TeamController extends Controller
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
        $this->component = new AdminComponent();
        $team = $this->component->getTeam();

        $view = new View('admin/team', $this->page, ['team' => $team]);
    }

    public function addForm()
    {
        $view = new View('admin/team/add', $this->page);
    }

    public function add()
    {
        $this->component = new AdminComponent();

        $post = $this->page->getPost();
        $files = $this->page->getFiles();

        $name = $post['name'];
        $department = $post['department'];
        $position = $post['position'];
        $positionNumber = $post['position_number'];

        $file = $files['photo'];

        if ($this->component->addTeam($name, $department, $position, $positionNumber, $file))
            header("Location: /admin/team/");
    }

    public function editForm()
    {
        $this->component = new AdminComponent();

        $id = $this->params['id'];
        $team = $this->component->getOneTeam($id);

        $view = new View('admin/team/edit', $this->page, ['team' => $team]);
    }

    public function edit()
    {
        $this->component = new AdminComponent();

        $post = $this->page->getPost();
        $files = $this->page->getFiles();

        $id = $post['id'];
        $name = $post['name'];
        $department = $post['department'];
        $position = $post['position'];
        $positionNumber = $post['position_number'];

        $file = $files['photo'];

        if ($this->component->updateTeam($id, $name, $department, $position, $positionNumber, $file))
            header("Location: /admin/team/");
    }

    public function delete()
    {
        $this->component = new AdminComponent();

        $post = $this->page->getPost();
        if (!isset($post['id']))
            return;

        $id = $post['id'];

        if ($this->component->deleteTeam($id))
            header("Location: /admin/team/");
    }
}