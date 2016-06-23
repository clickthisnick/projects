<?php

$path_constants = $_SERVER['DOCUMENT_ROOT'] . '/me/api/angularTaskList/paths.php';
require_once $path_constants;

$tasks = R::getAll( 'SELECT * FROM tasks WHERE is_active = 1
   order by priority');

R::close();

echo json_encode($tasks);
?>
