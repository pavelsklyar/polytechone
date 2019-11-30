<nav class="admin__nav">
    <ul class="menu__admin">
        <li class="admin__item menu__logo">
            <a href="/">
                ADMIN PANEL
            </a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[2] === "") : ?>menu__item-select<?php endif; ?>">
            <a href="/admin/">Страницы сайта</a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[2] === "requests") : ?>menu__item-select<?php endif; ?>">
            <a href="/admin/requests/">Заявки</a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[1] === "team") : ?>menu__item-select<?php endif; ?>">
            <a href="/admin/team/">Состав команды</a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[1] === "admins") : ?>menu__item-select<?php endif; ?>">
            <a href="/admin/admins/">Администраторы</a>
        </li>
    </ul>
</nav>
