<?php

/**
 * @var $page \app\base\Page;
 */

$path = new \app\base\Path();
?>

<!doctype html>
<html lang="ru">

<head>
    <?php include $page->getScripts(); ?>
    <?php include $page->getMeta(); ?>
    <?php include $page->getStyles(); ?>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title><?= $page->getTitle(); ?></title>
    <meta name="description" content="<?= $page->getDescription(); ?>">
    <meta name="keywords" content="<?= $page->getKeywords(); ?>">
</head>

<body>
    <div class="body">
        <?php if ($path->getPath()[1] !== 'admin') : ?>
            <?php include $page->getHeader(); ?>
        <?php endif; ?>

        <div class="content">
            <?php
            if (!empty($page->getData()))
                extract($page->getData());

            if (!empty($page->getContent()))
                echo $page->getContent();
            ?>
        </div>

        <?php if ($path->getPath()[1] !== '' && $page->module !== 'admin') : ?>
            <footer>
                <?php include $page->getFooter(); ?>
            </footer>
        <?php endif; ?>
    </div>
</body>

</html>