<?php
use App\Controller\HomeController;
use App\Controller\LandingController;
use App\Controller\EmailController;

$router->get('/', [HomeController::class, 'index']);

$router->get('/site-internet', [LandingController::class, 'index']);

$router->post('/submit-contact', [EmailController::class, 'send']);
