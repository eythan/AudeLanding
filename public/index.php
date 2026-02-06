<?php
use App\Core\Router;
use Dotenv\Dotenv;

session_start();

define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(ROOT);
$dotenv->load();

$router = new Router();

require_once ROOT . '/routes/web.php';

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);