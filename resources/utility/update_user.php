<?php
  session_start();
  require_once "../../config/config.php";
  $id = $_SESSION['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sec_question = $_POST['sec_question'];
  $sec_answer = $_POST['sec_answer'];
  $table = "users";
  $target_path = "../../img/userPics";
  $avatar = $_POST['avatar'];
if(isset($email,$password,$sec_question,$sec_answer,$avatar)){

  $target_paths = $target_path . basename($_FILES['avatar']['name']);

  if(move_uploaded_file($_FILES[$avatar]['tmp_name'],$target_paths)){
    echo 'Success';
  }
  else{
    echo "fail";
  }

  $sql = "UPDATE $table SET email = '$email', psswrd = '$password',
  sec_question = '$sec_question', sec_answer='$sec_answer', avatar='$avatar' WHERE user_id = '$id'";

  if (mysqli_query($link, $sql)) {
    // echo "New record created successfully";
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
}else{

}
 ?>
