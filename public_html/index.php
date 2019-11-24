<?php
/**
 * @var $routing \base\Routing
 */

require_once "../app/autoload.php";

session_start();

$page = new app\base\Page();
$app = new \app\App($page, $routing);

$app->run();
$page->generate();