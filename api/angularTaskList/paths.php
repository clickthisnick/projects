<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$paths = [
    "root" => $root,
    "authentication" => $root . '/projects/api/authentication.php',
    "connection" => $root . '/projects/api/angularTaskList/database/connection.php',
    "rb" => $root . '/projects/api/rb.php',
];

require_once($paths['rb']);
require_once($paths['../../../../connection']);
require_once($paths['authentication']);

authentication();

?>
