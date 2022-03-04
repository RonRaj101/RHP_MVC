<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [new SiteController(),'handleIndex']);

$app->router->get('/contact',[new SiteController(),'displayContactForm']);

$app->router->post('/contact',[new SiteController(),'handleContactSubmit']);

$app->run();