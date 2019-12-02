<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "История команды - Polytech:ONE";

?>

<link rel="stylesheet" href="/css/history.css">
<div class="bckgHistImg"><img src="/images/history/smokeBckgHist.png"></div>
<main class="history">
    <h1 class="headline"><?= $title ?></h1>

    <div class="part1">
        <div class="p1CarImg">
            <img src="/images/history/p1CarImg.png">
        </div>
        <div class="p1TextBox">
            <div class="p1Text1">
                <?= $content['text1']; ?>
            </div>
            <div class="p1Text2">
                <?= $content['text2']; ?>
            </div>
        </div>
    </div>
    <div class="part2">
        <div class="p2Box">
            <div class="p2PeopleImg">
                <img src="/images/history/p2PeopleImg.png">
            </div>
            <div class="p2WorkImg">
                <img src="/images/history/p2WorkImg.png">
            </div>
        </div>
        <div class="p2Text1">
            <?= $content['text3']; ?>
        </div>    
    </div>
    <div class="p3H1">
        <span><?= $content['p3H1']; ?></span>
        <div class="lineP3H1">
            <img src="/images/history/p3H1Hr.png">
        </div>
    </div>
    <div class="part3">
        <div class="p3InfBox1">
            <div class="p3InfBoxImg1">
                <img src="/images/history/p3InfBox1.png">
            </div>
            <div class="p3Text1">
                <?= $content['p3InfBox1']; ?>
            </div>
        </div>
        <div class="p3InfBox2">
            <div class="p3InfBoxImg2">
                <img src="/images/history/p3InfBox2.png">
            </div>
            <div class="p3Text2">
                <?= $content['p3InfBox2']; ?>
            </div>
        </div>
        <div class="p3InfBox3">
            <div class="p3InfBoxImg3">
                <img src="/images/history/p3InfBox3.png">
            </div>
            <div class="p3Text3">
                <?= $content['p3InfBox3']; ?>
            </div>
        </div>
    </div>
</main>