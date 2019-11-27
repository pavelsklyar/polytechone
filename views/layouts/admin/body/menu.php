<nav class="admin__nav">
    <ul class="menu__admin">
        <li class="admin__item menu__logo">
            <a href="/">
                ADMIN PANEL
            </a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[1] === "") : ?>menu__item-select<?php endif; ?>">
            <a href="/">none</a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[1] === "") : ?>menu__item-select<?php endif; ?>">
            <a href="/">none</a>
        </li>
        <li class="admin__item <?php if ($path->getPath()[1] === "") : ?>menu__item-select<?php endif; ?>">
            <a href="/">none</a>
        </li>
    </ul>
</nav>