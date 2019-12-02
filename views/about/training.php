<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Подготовка KIA - Polytech:ONE";

?>

<main class="training">
    <h1 class="headline"><?= $title ?></h1>
    <div class="articleTr">
        <div class="row1Tr">
            <div class="text-1Tr">
                <p><?= $content['text1'] ?></p>
            </div>
            <img class="photo1Tr" src="/images/training/photo1.0.png">
        </div>
        <div class="row2Tr">
            <div class="columnTr">
                <img class="photo2Tr" src="/images/training/photo2.png">
                <p><?= $content['text2'] ?></p>
            </div>
            <img class="photo3Tr" src="/images/training/photo3.png">
        </div>
        <div class="row3Tr">
            <img class="photo4Tr" src="/images/training/photo4.png">
            <div class="text4textTr">
            <p><?= $content['text3'] ?></p>
        </div>
        </div>
    </div>
</main>