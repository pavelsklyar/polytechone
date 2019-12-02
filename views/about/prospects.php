<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Перспективы - Polytech:ONE";

?>

<main class="prospects">
    <h1 class="headline"><?= $title ?></h1>
    <div class="prospects-content">
        <p><?= $content['text1'] ?></p>
    </div>
</main>