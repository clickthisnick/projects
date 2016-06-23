<?php

$path_constants = $_SERVER['DOCUMENT_ROOT'] . '/me/api/angularTaskList/paths.php';
require_once $path_constants;

$due = $_POST["due"];

$datetime = DateTime::createFromFormat('Y-m-d H:i:s', $due);

if(!$datetime){
  header("HTTP/1.1 500 Server Error");
  die("Datetime: " . $datetime . " was not in the correct format");
}

 $row = R::dispense("tasks");

  foreach( $_POST as $key=>$value ) {
  	$row->$key = $value;
  }

  $result = R::store( $row );

  echo $result;

?>
