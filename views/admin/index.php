<?php
/**
* @var $page \app\base\Page;
* @var $sitePages;
*/

$page->title = "Страницы сайта - Админ-панель Polytech:ONE";

foreach ($sitePages as &$sitePage) {
    $arr = explode('/', $sitePage['url']);
    $sitePage['delimiter_url'] = "";
    $temp = 0;
    foreach ($arr as $item) {
        if ($item == '')
            continue;
        if ($temp)
            $sitePage['delimiter_url'] .= "-" . $item;
        else {
            $sitePage['delimiter_url'] .= $item;
            $temp = 1;
        }
    }
}

?>


<div class="admin">
    <ul>
    <?php for($key = 0; $key < count($sitePages); $key++) : ?>
        <?php if ($sitePages[$key]['url'] == '/') : ?>
            <li>
                <a href="/admin/edit/index/"><?= $sitePages[$key]['title'] ?></a>
            </li>
        <?php else : ?>
        <li>
            <a href="/admin/edit/<?= $sitePages[$key]['delimiter_url'] ?>/"><?= $sitePages[$key]['title'] ?></a>
        </li>
        <?php endif; ?>
    <?php endfor; ?>
    </ul>
</div>

