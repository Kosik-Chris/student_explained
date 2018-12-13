<?php

  require_once "config/config.php";

  $table = "users";
  $server = "localhost";

  $email = $_POST['email'];
  $password = $_POST['password'];
  $picture = "img/userPics/default.png";

  $email = stripslashes($email);
  $password = stripslashes($password);

  $myusername = mysqli_real_escape_string($link,$email);
  $mypassword = mysqli_real_escape_string($link,$password);


  $sql = "SELECT * FROM $table WHERE email = '$email' and psswrd = '$password'";
  $result = mysqli_query($link,$sql);

  $count = mysqli_num_rows($result);

  if($count == 1) {
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['email'] = $email;
         $_SESSION['password'] = $password;
         header("location: welcome.php");
         exit();
      }
  else {
        header("location: index.php");
         exit();
      }


?>
