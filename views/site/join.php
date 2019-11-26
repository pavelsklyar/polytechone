<?php

/**
 * @var $page \app\base\Page;
 * @var $form - параметр, указывающий, какую форму отобразить
 */

$page->title = "Присоединитесь к нам - Polytech:ONE";

var_dump($form);

?>


<main class="join">
    <h1 class="headline">Присоединитесь к нам</h1>


    <div class="join-form">
        <form action="/join/" class=join-form__select>
            <div class="join-form__selectButton">
                <div class="join-form__submit">
                    <button type="submit" name="form" value="team">ЧЕЛОВЕК</button>
                </div>
                <div class="join-form__submit">
                    <button type="submit" name="form" value="partner">КОМПАНИЯ</button>
                </div>
            </div>
        </form>

        <?php if (!isset($form) || $form == "team") : ?>
        <form action="/join/team/" class="join-form__form" id="team">

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
                    <label for="phone">Телефон</label>
                    <input type="text" name="name" id="phone" placeholder="+7 (999) 999-99-99"><span></span>
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
        <?php elseif ($form == "partner") : ?>
        <form action="/join/partner/" class="join-form__form" id="partner">

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
                    <input type="text" name="name" id="phone" placeholder="+7 (999) 999-99-99"><span></span>
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
        <?php endif; ?>
    </div>
</main>

<script>
    $(function($){
        //Использование параметра completed
        $("#phone").mask("+7 (999) 999-99-99", {
            completed: function(){ alert("Вы ввели номер: " + this.val()); }
        });
    });
</script>