<?php
/**
 * @var $page \app\base\Page;
 * @var $team - массив с данными об участнике
 */

$page->title = "Редактировать участника - Админ-панель Polytech:ONE";

?>

<form action="/admin/team/edit/" class="join-form__form" id="team" method="post" enctype="multipart/form-data">

    <div class="join-form__main">

        <p class="join-form__line">
            <label for="name">Имя и фамилия</label>
            <input type="text" name="name" id="name" pattern="[А-Я][а-я]+{2}" placeholder="Василий Петров" value="<?= $team['name'] ?>"><span></span>
        </p>

        <p class="join-form__line">
            <label for="department">Отдел</label>
            <input type="text" name="department" id="department" pattern="[А-Я][а-я]+{2}" placeholder="Отдел Шасси" value="<?= $team['department'] ?>"><span></span>
        </p>

        <p class="join-form__line">
            <label for="position">Должность</label>
            <input type="text" name="position" id="position" pattern="[А-Я][а-я]+{2}" placeholder="Руководитель отдела" value="<?= $team['position'] ?>"><span></span>
        </p>

        <p class="join-form__line">
            <label for="position_number">Позиция при отображении</label>
            <input type="number" name="position_number" id="position_number" placeholder="1" value="<?= $team['position_number'] ?>"><span></span>
        </p>

        <p class="join-form__line">
            <label for="photo">Фотография</label>
            <input type="file" name="photo" id="photo"><span></span>
        </p>

        <input type="hidden" name="id" value="<?= $team['id'] ?>">

    </div>
    <div class="join-form__submit">
        <button type="submit">ОБНОВИТЬ</button>
    </div>
</form>