<?php
session_start();

function authentication(){
  $authenticated = ( isset($_SESSION["authenticated"]) ? true : false );
  if (!$authenticated){
    header("HTTP/1.1 401 Unauthorized");
    die("Unauthorized, please login");
  }
}

?>
