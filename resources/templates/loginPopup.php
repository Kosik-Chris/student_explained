<?php

  echo '<div id="modal-wrapper" class="modal">
    <form class="modal-content animate" method="POST" action="login.php">
      <div class="imgcontainer">
        <span onclick="document.getElementById(\'modal-wrapper\').style.display=\'none\'" class="close" title="Close PopUp">&times;</span>
        <img src="img/userPics/default.png" alt="Avatar" class="avatar" width="50%" height="50%">
        <h1 style="text-align:center">Student Explained Login</h1>
      </div>
      <div class="popup_container">
        <input type="text" placeholder="Enter Email" name="email"/>
        <input type="password" placeholder="Enter Password" name="password"/>
        <input type="submit" value="Login" class="loginBtn"/>
        <input type="checkbox" style="margin:26px 30px;"/> Remember me
      </div>
      <a href="forgotPassword.php" style="text-decoration:none; text-align:center; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
      <br />
      <h5 style="text-align:center">Login with Media Accounts Below</h5>
      <div class="oktaBtn">
          <a href="oktaLogin.php">Media Login</a>
      </div>
    </form>
  </div>
  <script>
      var modal = document.getElementById(\'modal-wrapper\');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
  </script>';
 ?>
