<?php


namespace app\components;


use app\base\Component;
use app\database\tables\ContentTable;
use app\database\tables\PagesTable;

class PageComponent extends Component
{
    private $pagesTable;
    private $contentTable;

    public function getContent($url)
    {
        $this->pagesTable = new PagesTable();
        $this->contentTable = new ContentTable();

        $page = $this->pagesTable->getByCondition('url', $url)[0];
        $contentPage = $this->contentTable->getByCondition('page', $page['id']);

        $content = array();
        foreach ($contentPage as $item) {
            $content[$item['block']] = $item['content'];
        }

        unset($contentPage);

        return ['title' => $page['title'], 'content' => $content];
    }
}