<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Контакты - Polytech:ONE";

?>

<main class="contact">
    <h1 class="headline"><?= $title ?></h1>
    <div class="contact-content">
        <div class="socm">
            <div class="social">
                <h2><?= $content['social'] ?></h2>
                <img src="/images/partners/partHr.png">
                <li>
                    <a target="_blank" href="https://vk.com/polytechone">
                        <img src="/images/vk.png">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/polytechone/">
                        <img src="/images/instagram.png">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/POmoscow">
                        <img src="/images/facebook.png">
                    </a>
                </li>
            </div>
            <div class="map">
                <h2><?= $content['address'] ?></h2>
                <img src="/images/partners/partHr.png">
                <p><?= $content['address-text'] ?></p>
                <iframe src="https://yandex.ru/map-widget/v1/-/CBRRVDsE~D" frameborder="0" allowfullscreen="true"></iframe>
            </div>
        </div>
        <div class="phone">
            <h2><?= $content['phones'] ?></h2>
            <img src="/images/partners/partHr.png">
            <div>
                <div>
                    <p><?= $content['face1'] ?></p>
                    <p><?= $content['position1'] ?></p>
                    <li>
                        <img src="/images/phone.png">
                        <a><?= $content['phone1'] ?></a>
                    </li>
                </div>
            </div>
            <div>
                <div>
                    <p><?= $content['face2'] ?></p>
                    <p><?= $content['position2'] ?></p>
                    <li>
                        <img src="/images/phone.png">
                        <a><?= $content['phone2'] ?></a>
                    </li>
                </div>
            </div>
            <div>
                <div>
                    <p><?= $content['face3'] ?></p>
                    <p><?= $content['position3'] ?></p>
                    <li>
                        <img src="/images/phone.png">
                        <a><?= $content['phone3'] ?></a>
                </div>
                </li>
            </div>
        </div>
    </div>
</main>