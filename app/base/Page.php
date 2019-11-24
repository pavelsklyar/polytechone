<?php

namespace app\base;

use app\security\Security;

class Page
{
    private $meta;
    private $styles;
    private $adminStyles;

    public $title;
    public $description;
    public $keywords;

    private $header;
    private $footer;

    private $data;
    private $content;

    private $get;
    private $post;

    public $session;

    public $module;

    public function __construct()
    {
        $this->meta = COMMON_LAYOUTS . "head/meta.php";
        $this->styles = COMMON_LAYOUTS . "head/styles.php";
        $this->adminStyles = ADMIN_LAYOUTS . 'head/styles.php';
        $this->header = COMMON_LAYOUTS . "body/header.php";
        $this->footer = COMMON_LAYOUTS . "body/footer.php";

        if (!empty($_GET))
            $this->get = Security::protectData($_GET);
        if (!empty($_POST))
            $this->post = Security::protectData($_POST);

        $this->session = $_SESSION;
    }

    public function generate()
    {
        $generator = new Generate($this);
    }

    /**
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @return string
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * @param array $get
     */
    public function setGet($get)
    {
        $this->get = $get;
    }

    /**
     * @return array
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param array $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }
}