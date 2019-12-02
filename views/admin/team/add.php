<?php
/**
 * @var $page \app\base\Page;
 * @var $admins - массив с администраторами
 */

$page->title = "Добавить участника команды - Админ-панель Polytech:ONE";

?>

<form action="/admin/team/add/" class="join-form__form" id="team" method="post" enctype="multipart/form-data">

    <div class="join-form__main">

        <p class="join-form__line">
            <label for="name">Имя и фамилия</label>
            <input type="text" name="name" id="name" required pattern="[А-Я][а-я]+{2}" placeholder="Василий Петров"><span></span>
        </p>

        <p class="join-form__line">
            <label for="department">Отдел</label>
            <input type="text" name="department" id="department" required pattern="[А-Я][а-я]+{2}" placeholder="Отдел Шасси"><span></span>
        </p>

        <p class="join-form__line">
            <label for="position">Должность</label>
            <input type="text" name="position" id="position" required pattern="[А-Я][а-я]+{2}" placeholder="Руководитель отдела"><span></span>
        </p>

        <p class="join-form__line">
            <label for="position_number">Позиция при отображении</label>
            <input type="number" name="position_number" id="position_number" required placeholder="1"><span></span>
        </p>

        <p class="join-form__line">
            <label for="photo">Фотография</label>
            <input type="file" name="photo" id="photo" required><span></span>
        </p>

    </div>
    <div class="join-form__submit">
        <button type="submit">ДОБАВИТЬ</button>
    </div>
</form>