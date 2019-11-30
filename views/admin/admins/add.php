<?php
/**
 * @var $page \app\base\Page;
 * @var $admins - массив с администраторами
 */

$page->title = "Добавить администратора - Админ-панель Polytech:ONE";

?>

<form action="/admin/admins/add/" class="join-form__form" id="team" method="post">

    <div class="join-form__main">

        <p class="join-form__line">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" required pattern="[А-Я][а-я]+" placeholder="Василий"><span></span>
        </p>

        <p class="join-form__line">
            <label for="second_name">Фамилия</label>
            <input type="text" name="surname" id="second_name" required pattern="[А-Я][а-я]+" placeholder="Васильев"><span></span>
        </p>

        <p class="join-form__line">
            <label for="Email">Эл. почта</label>
            <input type="Email" name="email" id="Email" required placeholder="example@post.com"><span></span>
        </p>

        <p class="join-form__line">
            <label for="phone">Пароль</label>
            <input type="password" name="password" id="password" required placeholder="пароль"><span></span>
        </p>

    </div>
    <div class="join-form__submit">
        <button type="submit">ОТПРАВИТЬ</button>
    </div>
</form>