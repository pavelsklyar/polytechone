<?php

use app\controllers\AboutController;
use app\controllers\AdminController;
use app\controllers\SiteController;

$routing = new \base\Routing();

$routing->add('GET', '/', 'common',SiteController::class, 'index');
$routing->add('GET', '/partners/', 'common', SiteController::class, 'partners');
$routing->add('GET', '/join/', 'common', SiteController::class, 'join');
$routing->add('GET', '/contacts/', 'common', SiteController::class, 'contacts');

$routing->add('GET', '/about/history/', 'common', AboutController::class, 'history');
$routing->add('GET', '/about/tests/', 'common', AboutController::class, 'tests');
$routing->add('GET', '/about/training/', 'common', AboutController::class, 'training');
$routing->add('GET', '/about/firstrace/', 'common', AboutController::class, 'firstrace');
$routing->add('GET', '/about/lineup/', 'common', AboutController::class, 'lineup');
$routing->add('GET', '/about/prospects/', 'common', AboutController::class, 'prospects');

$routing->add('GET', '/admin/', 'admin', AdminController::class, 'index');