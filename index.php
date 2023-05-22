<?php

require_once 'vendor/autoload.php';

$router = new Router();
$router->route(ReqMethod::GET, "/");