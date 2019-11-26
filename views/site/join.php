<?php

/**
 * @var $page \app\base\Page;
 */

$page->title = "Присоединитесь к нам - Polytech:ONE";

?>

<main class="join">
    <h1 class="headline">Присоединитесь к нам</h1>
    <div class="join-form">
        <form class="join-form__form">
            <div class="join-form__selectButton">
                <div class="join-form__submit">
                    <button type="select">ЧЕЛОВЕК</button>
                </div>
                <div class="join-form__submit">
                    <button type="select">КОМПАНИЯ</button>
                </div>
            </div>

            <div class="join-form__main">

                <p class="join-form__line">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name" required pattern="[А-Я][а-я]+" placeholder="Василий"><span></span>
                </p>

                <p class="join-form__line">
                    <label for="second_name">Фамилия</label>
                    <input type="text" name="name" id="second_name" required pattern="[А-Я][а-я]+" placeholder="Васильев"><span></span>
                </p>

                <p class="join-form__line">
                    <label for="second_name">Компания</label>
                    <input type="text" name="name" id="company" required pattern="[А-Я][а-я]+" placeholder="Motul"><span></span>
                </p>

                <p class="join-form__line">
                    <label for="phone">Телефон</label>
                    <input type="text" name="name" id="phone" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" value="+7"><span></span>
                </p>

                <p class="join-form__line">
                    <label for="Email">Эл. почта</label>
                    <input type="Email" name="name" id="Email" required placeholder="example@post.com"><span></span>
                </p>

            </div>
            <div class="join-form__submit">
                <button type="submit">ОТПРАВИТЬ</button>
            </div>
        </form>
    </div>
</main>