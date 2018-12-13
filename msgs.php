<?php
require_once("config/config.php");
session_start();
$_SESSION['posted'] = false;

if(isset($_POST['submit'])){

    $table = "message";
    $time = date("g:i:s A");
    $date = date("n/j/Y");
    $avatar = $_SESSION['avatar'];
    $email = $_SESSION['email'];
    $hash = $_POST['hash'];

  if(!empty($_POST['message']) && !empty($email)){
    $msg = $_POST['message'];
    $sql = "INSERT INTO $table (message,email,avatar,timer,dater,hash)
    VALUES('$msg','$email','$avatar','$time','$date','$hash')";

    $result = mysqli_query($link,$sql);


    header("location: chatroom.php");
  }

}


?>
