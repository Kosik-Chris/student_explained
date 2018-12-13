<?php
require_once("config/config.php");
session_start();
$_SESSION['posted'] = false;

if(isset($_POST['submit'])){

    $table = "message";
    $email = $_SESSION['email'];

  if(!empty($_POST['dislike']) && !empty($email)){
    $dislike = $_POST['dislike'];
    $sql = "UPDATE $table SET dislikes = dislikes+1 WHERE email = '$email'";

    $result = mysqli_query($link,$sql);


    header("location: chatroom.php");
  }

}


?>
