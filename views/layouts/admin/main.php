<?php
/**
 * @var $page \app\base\Page;
 */

$path = new \app\base\Path();
?>

<!doctype html>
<html lang="ru">
<head>
    <?php include $page->getAdminStyles(); ?>
    <?php include $page->getStyles(); ?>

    <title><?= $page->getTitle(); ?></title>
</head>
<body>
    <?php if (isset($page->session['auth'])) : ?>
    <div class="admin_menu">
        <?php include $page->getAdminMenu(); ?>
    </div>
    <?php endif; ?>

    <div class="admin_content">
        <?php
            if (!empty($page->getData()))
                extract($page->getData());

            if (!empty($page->getContent()))
                echo $page->getContent();
        ?>
    </div>
</body>
</html>