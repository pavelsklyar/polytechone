<?php
/**
* @var $page \app\base\Page;
* @var $urls
*/

$page->title = "Страницы сайта - Админ-панель Polytech:ONE";

$i = 0;

$pageUrl = [];

foreach ($urls as $url) {
    $arr = explode('/', $url['url']);
    $pageUrl[$i]['url'] = "";
    $temp = 0;
    foreach ($arr as $item) {
        if ($item == '')
            continue;
        if ($temp)
            $pageUrl[$i]['url'] .= "-" . $item;
        else {
            $pageUrl[$i]['url'] .= $item;
            $temp = 1;
        }
    }
    $i++;
}
?>


<div class="admin">
    <ul>
    <?php foreach ($urls as $key => $url) : ?>
        <?php if ($url['url'] == '/') : ?>
            <li>
                <a href="/admin/edit/index/"><?= $url['url'] ?></a>
            </li>
        <?php else : ?>
        <li>
            <a href="/admin/edit/<?= $pageUrl[$key]['url'] ?>/"><?= $url['url'] ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</div>