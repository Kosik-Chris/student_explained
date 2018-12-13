<?php

  require_once "../../config/config.php";
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone1 = $_POST['phone1'];
  $phone2 = $_POST['phone2'];
  $phone3 = $_POST['phone3'];
  $phone = $phone1 . $phone2 . $phone3;
  $sec_question = $_POST['sec_question'];
  $sec_answer = $_POST['sec_answer'];
  $dig_pin = $_POST['dig_pin'];
  $database = "student_main";
  $sPass = "mypassword";
  $table = "users";
  $avatar = "img/userPics/default.png";
  $server = "localhost";
  $id = uniqid();
  $state = 1;
  $nonce = "nonce";
  //Define Statement
  $sql = "INSERT INTO $table (user_id,f_name,l_name,email,psswrd,
    phone,sec_question,sec_answer,dig_pin,avatar) VALUES ('$id','$f_name','$l_name','$email',
      '$password',$phone,'$sec_question','$sec_answer',$dig_pin,'$avatar')";

  if (mysqli_query($link, $sql)) {
    // echo "New record created successfully";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION["id"] = $id;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["avatar"] = $avatar;
    header("location: ../../welcome.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
  mysqli_close($link);
 ?>
