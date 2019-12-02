<?php

/**
 * @var $page \app\base\Page;
 * @var $title - заголовок
 * @var $content - массив с контентом
 */

$page->title = "Polytech:ONE";

?>

<div class="container">
    <main>
        <!--Боковой блок с ссылками на соц. сети-->
        <div class="social_bar">
            <div class="long_line"><img class="long" src="/images/long_line.png"></div>
            <div class="soc">
                <ul>
                    <li>
                        <a href="https://vk.com/polytechone" target="_blank">
                            <img src="/images/vk.png" alt="vk">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/polytechone/" target="_blank">
                            <img src="/images/instagram.png" alt="inst">
                        </a>
                    </li>
                    <li>
                        <a href=" https://www.facebook.com/POmoscow/" target="_blank">
                            <img src="/images/facebook.png" alt="facebook">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="short_line">
                <img src="/images/short_line.png">
            </div>
        </div>
        <!--Основная информация-->
        <div class="text_bar">
            <div class="text_h1"><?= $title ?></div>
            <div class="text_5">
                <?= $content['description'] ?>
            </div>
        </div>
    </main>
    <!--Футер-->
    <div class="main_footer">
        <div class="location">
            <div class="loc_icon"><img class="loc_icon" src="/images/location.png"></div>
            <div class="loc_text"><?= $content['location'] ?></div>
        </div>
        <div class="phone">
            <div class="phone_img"><img class="phone_img" src="/images/phone.png" alt="phone"></div>
            <div class="tel"><?= $content['phone'] ?></div>
        </div>
    </div>
</div>