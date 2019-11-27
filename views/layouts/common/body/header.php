<nav class="nav">
    <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
    <div class="toogleMenu">
        <a>
            <label for="menu">
                <img src="/images/burger.png">
                <img src="/images/exit.png">
            </label>
        </a>
        <a href="/">
            <img src="/images/logo.png">
        </a>
        <a href="tel:+7-926-123-37-01">
            <img src="/images/phone.png">
        </a>
    </div>
    <ul class="menu">
        <li class="menu__item menu__logo">
            <a href="/">
                <img src="/images/logo.png">
            </a>
        </li>
        <li class="menu__item <?php if ($path->getPath()[1] === "") : ?>menu__item-select<?php endif; ?>">
            <a href="/">главная</a>
        </li>
        <li class="menu__item <?php if ($path->getPath()[1] === "about") : ?>menu__item-select<?php endif; ?>">
            <input type="checkbox" name="toggle" class="toggleSubmenu" id="submenu">
            <a href="/">о нас</a>
            <label for="submenu" class="toggleSubmenu"></label>
            <ul class="submenu">
                <li>
                    <a href="/about/history/">история команды</a>
                </li>
                <li>
                    <a href="/about/tests/">настройка/тесты</a>
                </li>
                <li>
                    <a href="/about/training/">подготовка KIA</a>
                </li>
                <li>
                    <a href="/about/firstrace/">первая гонка</a>
                </li>
                <li>
                    <a href="/about/lineup/">состав команды</a>
                </li>
                <li>
                    <a href="/about/prospects/">перспективы</a>
                </li>
            </ul>
        </li>
        <li class="menu__item <?php if ($path->getPath()[1] === "partners") : ?>menu__item-select<?php endif; ?>">
            <a href="/partners/">партнеры</a>
        </li>
        <li class="menu__item <?php if ($path->getPath()[1] === "join") : ?>menu__item-select<?php endif; ?>">
            <a href="/join/">присоединиться</a>
        </li>
        <li class="menu__item <?php if ($path->getPath()[1] === "contacts") : ?>menu__item-select<?php endif; ?>">
            <a href="/contacts/">контакты</a>
        </li>
    </ul>
</nav>