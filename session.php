<?php
   include('config/config.php');

   $user_check = $_SESSION['email'];

   $ses_sql = mysqli_query($link,"select email from users where email = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['email'];

   if(!isset($_SESSION['email'])){
      header("location: index.php");
   }
?>
