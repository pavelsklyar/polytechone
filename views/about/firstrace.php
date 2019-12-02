<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Первая гонка - Polytech:ONE";

?>

<div class="firstracesmoke"><img class="img" src="/images/firstrace/smoke.png"></div>
<main class="firstrace">
    <h1 class="headline"><?= $title ?></h1>
    <div class="firstrace-content">
        <div class="ceed"><img class="car" src="/images/firstrace/ceed2.png"></div>
        <div class="right">
            <h2><?= $content['h2-1'] ?></h2>
            <img src="/images/partners/partHr.png">
            <p><?= $content['text1'] ?></p>
            <p><?= $content['text2'] ?></p>
            <p><?= $content['text3'] ?></p>
        </div>
        <div>
            <p><?= $content['text4'] ?></p>
            <p><?= $content['text5'] ?></p>
            <p><?= $content['text6'] ?></p>
        </div>
        <div class="left">
            <h2><?= $content['h2-2'] ?></h2>
            <img src="/images/partners/partHr.png">
            <p><?= $content['text1'] ?></p>
        </div>
    </div>
    <div class="second"><img src="/images/firstrace/second.png"></div>
</main>
