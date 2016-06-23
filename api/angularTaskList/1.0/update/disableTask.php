<?php
$path_constants = $_SERVER['DOCUMENT_ROOT'] . '/me/api/angularTaskList/paths.php';
require_once $path_constants;

$id = $_POST["id"];
$task = R::load( 'tasks', $id ); //reloads our task

$task->is_active = false;
R::store( $task );

?>
