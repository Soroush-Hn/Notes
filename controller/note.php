<?php
use model\Database;
use model\Router;
$configDB = require ROOT_FOLDER . '/config.php';
$DB = new Database($configDB["DataBase"]);
$id = $_GET["id"];
$note = $DB->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->findOrFail();

require ROOT_FOLDER . "/view/page/_note.php";