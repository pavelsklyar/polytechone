<?php
/**
 * @var $page \app\base\Page;
 * @var $id - id администратора в базе данных
 */

$page->title = "Изменить данные адмиинистратора - Админ-панель Polytech:ONE";

?>

<div>
    <p>Изменить почтовый ящик</p>
</div>
<form action="/admin/admins/edit/" class="join-form__form" id="team" method="post">

    <div class="join-form__main">

        <p class="join-form__line">
            <label for="oldemail">Старый email</label>
            <input type="email" name="oldemail" id="oldemail" required placeholder="Введите старый email"><span></span>
        </p>

        <p class="join-form__line">
            <label for="newemail">Новый email</label>
            <input type="email" name="newemail" id="newemail" required placeholder="Введите новый email"><span></span>
        </p>

        <input type="hidden" name="id" value="<?= $id ?>">

    </div>
    <div class="join-form__submit">
        <button type="submit" name="type" value="email">ИЗМЕНИТЬ EMAIL</button>
    </div>
</form>


<div>
    <p>Изменить пароль</p>
</div>
<form action="/admin/admins/edit/" class="join-form__form" id="team" method="post">

    <div class="join-form__main">

        <p class="join-form__line">
            <label for="oldpassword">Старый пароль</label>
            <input type="password" name="oldpassword" id="oldpassword" required placeholder="Введите старый пароль"><span></span>
        </p>

        <p class="join-form__line">
            <label for="newpassword">Новый пароль</label>
            <input type="password" name="newpassword" id="newpassword" required placeholder="Введите новый пароль"><span></span>
        </p>

        <p class="join-form__line">
            <label for="newpasswordtwice">Новый пароль ещё раз</label>
            <input type="password" name="newpasswordtwice" id="newpasswordtwice" required placeholder="Введите новый пароль ещё раз"><span></span>
        </p>

        <input type="hidden" name="id" value="<?= $id ?>">

    </div>
    <div class="join-form__submit">
        <button type="submit" name="type" value="password">ИЗМЕНИТЬ ПАРОЛЬ</button>
    </div>
</form>