<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Kelompok1\MVC\App\Router;
use Kelompok1\MVC\Controllers\UnauthenticatedController;


Router::add('GET', '/', UnauthenticatedController::class, 'index');
Router::add('GET', '/search-locker-details', UnauthenticatedController::class, 'searchLocker', [], ['searchinput']);
Router::add('GET', '/locker-detail', UnauthenticatedController::class, 'showLockerDetail', [], ['ltid']);

Router::run();