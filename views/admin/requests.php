<?php
/**
 * @var $page \app\base\Page;
 * @var $team - массив с командными заявками
 * @var $sponsor - массив со спонсорскими заявками
 * @var $table - какую таблицу отображать
 */

$page->title = "Заявки - Админ-панель Polytech:ONE";

if (!isset($table) || $table == 'team')
    $data = $team;
else
    $data = $sponsor;

?>
<div>
    <form action="/admin/requests/" class=join-form__select>
        <div class="join-form__selectButton">
            <div class="join-form__submit">
                <button type="submit" name="table" value="team">Командные заявки</button>
            </div>
            <div class="join-form__submit">
                <button type="submit" name="table" value="partner">Спонсорские заявки</button>
            </div>
        </div>
    </form>

    <table>
        <tr>
            <td>Имя</td>
            <td>Фамилия</td>
            <?php if (isset($table) && $table == 'partner') : ?>
                <td>Компания</td>
            <?php endif; ?>
            <td>Email</td>
            <td>Телефон</td>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><?= $item['surname'] ?></td>
                <?php if (isset($table) && $table == 'partner') : ?>
                    <td><?= $item['company'] ?></td>
                <?php endif; ?>
                <td><?= $item['email'] ?></td>
                <td><?= $item['phone'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
