<?php
/**
 * @var $page \app\base\Page;
 * @var $team - массив с составом команды
 */

$page->title = "Состав команды - Админ-панель Polytech:ONE";

?>

<table>
    <tr>
        <td>Позиция</td>
        <td>Имя и фамилия</td>
        <td>Отдел</td>
        <td>Должность</td>
        <td>Фото</td>
        <td>Редактировать</td>
    </tr>
    <?php foreach ($team as $item) : ?>
        <tr>
            <td><?= $item['position_number'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['department'] ?></td>
            <td><?= $item['position'] ?></td>
            <td><?= $item['photo'] ?></td>
            <td>Иконка</td>
        </tr>
    <?php endforeach; ?>
</table>