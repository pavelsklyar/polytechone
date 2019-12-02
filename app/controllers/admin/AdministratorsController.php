<?php


namespace app\controllers\admin;


use app\base\Controller;
use app\base\Page;
use app\base\Path;
use app\base\View;
use app\components\AdminComponent;
use app\components\AuthComponent;

class AdministratorsController extends Controller
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
        $admins = $this->component->getAdmins();

        $view = new View('admin/admins', $this->page, ['admins' => $admins]);
    }

    public function addForm()
    {
        $view = new View('admin/admins/add', $this->page);
    }

    public function add()
    {
        $post = $this->page->getPost();

        $this->component = new AuthComponent();
        $this->component->reg($post['email'], $post['password'], $post['name'], $post['surname']);

        header("Location: /admin/admins/ ");
    }

    public function editForm()
    {
        $id = $this->params['id'];

        $view = new View('admin/admins/edit', $this->page, ['id' => $id]);
    }

    public function edit()
    {
        $this->component = new AuthComponent();

        $post = $this->page->getPost();
        if (!isset($post['type']))
            return;

        if (!isset($post['id']))
            return;

        $id = $post['id'];

        if ($post['type'] === 'email') {
            $oldEmail = $post['oldemail'];
            $newEmail = $post['newemail'];

            if ($this->component->updateEmail($id, $oldEmail, $newEmail))
                header("Location: /admin/admins/ ");
        }
        elseif ($post['type'] === 'password') {
            $oldPassword = $post['oldpassword'];
            $newPassword = $post['newpassword'];
            $newPasswordTwice = $post['newpasswordtwice'];

            if ($newPassword !== $newPasswordTwice)
                return;

            if ($this->component->updatePassword($id, $oldPassword, $newPassword))
                header("Location: /admin/admins/ ");
        }
    }

    public function delete()
    {
        $this->component = new AuthComponent();

        $post = $this->page->getPost();
        if (!isset($post['id']))
            return;

        $id = $post['id'];

        if ($this->component->delete($id))
            header("Location: /admin/admins/ ");
    }
}