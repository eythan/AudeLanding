<?php
use App\Controller\HomeController;
use App\Controller\LandingController;

$router->get('/', [HomeController::class, 'index']);

$router->get('/site-internet', [LandingController::class, 'index']);