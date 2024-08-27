<?php

require_once __DIR__. "/Router/Router.php";
require_once __DIR__. "/../app/Controller/TestController.php";
require_once __DIR__. "/../app/Controller/FrontController.php";

use Controller\FrontController;
use Controller\TestController;
use Router\Router;

Router::add("GET", "/", FrontController::class, "index");
Router::add("GET", "/detail", FrontController::class, "detail");
Router::add("GET", "/hello", FrontController::class, "hello");
Router::add("GET", "/world",FrontController::class, "world");
// Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductController::class, "categories");


Router::run();

