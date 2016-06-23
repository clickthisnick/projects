<?php

$path_constants = $_SERVER['DOCUMENT_ROOT'] . '/me/api/angularTaskList/paths.php';
require_once $path_constants;

$id = $_POST["id"];
$due = $_POST["due"];
$last_completed = $_POST["last_completed"];

$task = R::load( 'tasks', $id ); //reloads our task

$datetime = DateTime::createFromFormat('Y-m-d H:i:s', $due);

if(!$datetime){
  header("HTTP/1.1 500 Server Error");
  die("Datetime: " . $datetime . " was not in the correct format");
}

$task->due = $due;
$task->last_completed = $last_completed;
R::store( $task );

?>
