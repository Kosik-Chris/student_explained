<?php
require_once("config/config.php");
session_start();
$_SESSION['posted'] = false;

if(isset($_POST['submit'])){

    $table = "message";
    $email = $_SESSION['email'];

  if(!empty($_POST['like']) && !empty($email)){
    $like = $_POST['like'];
    $sql = "UPDATE $table SET likes = likes+1 WHERE email = '$email'";

    $result = mysqli_query($link,$sql);


    header("location: chatroom.php");
  }
  else{
    echo 'empty';
  }

}
else{
  echo 'error';
}


?>
