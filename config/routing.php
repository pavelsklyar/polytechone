<?php

use app\controllers\AboutController;
use app\controllers\SiteController;

$routing = new \base\Routing();

$routing->add('GET', '/', SiteController::class, 'index');
$routing->add('GET', '/partners/', SiteController::class, 'partners');
$routing->add('GET', '/contacts/', SiteController::class, 'contacts');

$routing->add('GET', '/about/history/', AboutController::class, 'history');
$routing->add('GET', '/about/tests/', AboutController::class, 'tests');
$routing->add('GET', '/about/training/', AboutController::class, 'training');
$routing->add('GET', '/about/firstrace/', AboutController::class, 'firstrace');
$routing->add('GET', '/about/lineup/', AboutController::class, 'lineup');
$routing->add('GET', '/about/prospects/', AboutController::class, 'prospects');