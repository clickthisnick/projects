<?php
session_start();

function frontend_auth(){
  $authenticated = ( isset($_SESSION["authenticated"]) ? true : false );

  if (!$authenticated){
    header("HTTP/1.1 401 Unauthorized");
    die("Unauthorized, please login");
  } else{
    $post_data = json_encode(array(authenticated => $authenticated));
    echo $post_data;
  }
}

frontend_auth();
?>
