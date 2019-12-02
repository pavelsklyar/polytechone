<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Настройка и тесты - Polytech:ONE";

?>

<main class="tests">
    <h1 class="headline"><?= $title ?></h1>

    <div class="main-1">
        <div class="text1">
            <?= $content['text1'] ?>
        </div>
        <div class="pht1"><img class="pht" src="/images/tests/Photo with a men.png" alt="Photo with a man"></div>
        <div class="hr"><img src="/images/tests/hr.png">
            <div class="text2">
                <?= $content['text2'] ?>
            </div>
        </div>
    </div>

    <div class="part2">
        <img class="pht2" src="/images/tests/Photo with a car .png" alt="Photo with a car">
        <div class="text_box">
            <div class="text3">
                <?= $content['text3'] ?>
            </div>
            <div class="text4">
                <?= $content['text4'] ?>
            </div>
        </div>
    </div>
</main>