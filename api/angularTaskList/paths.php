<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$paths = [
    "root" => $root,
    "authentication" => $root . '/me/api/authentication.php',
    "connection" => $root . '/me/api/angularTaskList/database/connection.php',
    "rb" => $root . '/me/api/rb.php',
];

require_once($paths['rb']);
require_once($paths['../../../../connection']);
require_once($paths['authentication']);

authentication();

?>
