<?php
use App\Controller\HomeController;
use App\Controller\LandingController;
use App\Controller\PanelController;
use App\Controller\EmailController;

#GET
$router->get('/', [HomeController::class, 'index']);

$router->get('/site-internet', [LandingController::class, 'index']);

$router->get('/panel', [PanelController::class, 'index']);

#POST
$router->post('/submit-contact', [EmailController::class, 'send']);

$router->post('/panel/add', [PanelController::class, 'add']);
