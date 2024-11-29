<?php
use model\Database;

$configDB = require ROOT_FOLDER . '/config.php';
$DB = new Database($configDB["DataBase"]);


require ROOT_FOLDER . "/view/page/_note-create.php";