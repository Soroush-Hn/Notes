<?php

use model\Router;
$router = new Router();

$router->get('/', 'controller/home.php');
$router->get('/about', 'controller/about.php');
$router->get('/dashboard', 'controller/dashboard.php');
$router->get('/notes', 'controller/notes.php');
$router->get('/note', 'controller/note.php');
$router->get('/notes/create', 'controller/note-create.php');
$router->get('/login', 'controller/login.php');
$router->get('/signup', 'controller/signup.php');