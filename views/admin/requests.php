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
<div class="admin__request">
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
            <th>Имя</th>
            <th>Фамилия</th>
            <?php if (isset($table) && $table == 'partner') : ?>
                <th>Компания</th>
            <?php endif; ?>
            <th>Email</th>
            <th>Телефон</th>
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
    <div class="join-form__submit">
                <button type="submit">Ответить на заявку</button>
            </div>
</div>
