<?php

use model\Database;

$configDB = require ROOT_FOLDER . '/config.php';
$DB = new Database($configDB["DataBase"]);

$notes = $DB->query("SELECT * FROM notes")->get();

require ROOT_FOLDER . "/view/page/_notes.php";