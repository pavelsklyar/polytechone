<?php
/**
 * @var $page \app\base\Page;
 * @var $admins - массив с администраторами
 */

$page->title = "Администраторы - Админ-панель Polytech:ONE";

?>

<div class="admin__request">
    <table>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Редактировать</th>
        </tr>
        <?php foreach ($admins as $item) : ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><?= $item['surname'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><img class="edit-icon" src="/images/edit.png"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="join-form__submit">
        
            <button type="submit"><a href="/admin/admins/add/">Добавить администратора</a></button>
        
    </div>
</div>
