<?php

$path_constants = $_SERVER['DOCUMENT_ROOT'] . '/me/api/angularTaskList/paths.php';
require_once $path_constants;

$id = $_POST["id"];
$name = $_POST["name"];
$due = $_POST["due"];
$reoccuring = $_POST["reoccuring"];
$priority = $_POST["priority"];


$task = R::load( 'tasks', $id ); //reloads our task

$datetime = DateTime::createFromFormat('Y-m-d H:i:s', $due);

if(!$datetime){
  header("HTTP/1.1 500 Server Error");
  die("Datetime: " . $datetime . " was not in the correct format");
}

$task->due = $due;
$task->name = $name;
$task->reoccuring = $reoccuring;
$task->priority = $priority;
R::store( $task );

?>
