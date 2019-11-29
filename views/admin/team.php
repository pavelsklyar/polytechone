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
        <th>Фото</th>
        <th>Редактировать</th>
    </tr>
    <?php foreach ($team as $item) : ?>
        <tr>
            <td><?= $item['position_number'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['department'] ?></td>
            <td><?= $item['position'] ?></td>
            <td><?= $item['photo'] ?></td>
            <td><img class="edit-icon" src="/images/edit.png"></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>