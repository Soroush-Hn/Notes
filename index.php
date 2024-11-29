<?php

global $router;
const ROOT_FOLDER = __DIR__;
require_once './vendor/autoload.php';

require 'routes.php';
$config = require 'config.php';

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST['_method'] ?? $_SERVER["REQUEST_METHOD"];
$router->route($uri, $method);
