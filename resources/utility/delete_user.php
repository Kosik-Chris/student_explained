<?php
  session_start();
  require_once "../../config/config.php";
  $table = "users";
  $messages = "message";
  $theUser = $_SESSION['email'];
  $sql = "DELETE FROM $table WHERE email='$theUser'";
  $sql2 = "DELETE FROM $messages WHERE email='$theUser'";

  if (mysqli_query($link, $sql)) {
    $result = mysqli_query($link,$sql2);
    session_destroy();

    header("location: ../../index.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
  mysqli_close($link);
 ?>
