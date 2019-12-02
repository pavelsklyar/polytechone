<?php
/**
 * @var $page \app\base\Page;
 * @var $team - массив с составом команды
 */

$page->title = "Состав команды - Админ-панель Polytech:ONE";

?>
<div class="admin__team">
<table>
    <tr>
        <th>Позиция</th>
        <th>Имя и фамилия</th>
        <th>Отдел</th>
        <th>Должность</th>
        <th>Редактировать</th>
    </tr>
    <?php foreach ($team as $item) : ?>
        <tr>
            <td><?= $item['position_number'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['department'] ?></td>
            <td><?= $item['position'] ?></td>
            <td>
                <a href="/admin/team/edit/<?= $item['id'] ?>/">
                    <img class="edit-icon" src="/images/edit.png">
                </a>
                <form action="/admin/team/delete/" method="post">
                    <button type="submit" name="id" value="<?= $item['id'] ?>">Удалить</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="join-form__submit">
    <button type="submit"><a href="/admin/team/add/">ДОБАВИТЬ</a></button>
</div>
</div>