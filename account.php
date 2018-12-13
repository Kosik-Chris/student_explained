<?php
// Initialize the session
session_start();
include('session.php');
// Check if the user is logged in, if not then redirect him to login page
?>
<html lang="en" dir="ltr">
  <head>
    <?php include 'resources/templates/mainHeader.php'; ?>
    <title>Welcome to Student Explained</title>
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  </head>
  <body>
    <h1 style="text-align: center; color: white;">Update your account</h1>
    <?php include_once ('resources/templates/navbarMain.php'); ?>
    <?php include 'resources/templates/sidebar.php'; ?>
    <div class="accountContainer">
      <form class="form-horizontal" onsubmit="validate()" method="post" action="resources/utility/update_user.php">
      <fieldset>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput" style="text-align: left; font-weight: bold;">Change Email</label>
        <div class="col-md-4">
        <input id="emailinput" name="email" type="email" placeholder="Enter new Email" class="form-control input-md" required>
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput1" style="text-align: left;font-weight: bold;">New password</label>
        <div class="col-md-4">
          <input id="passwordinput1" name="password" type="password" placeholder="new password" class="form-control input-md" required>

        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput2" style="text-align: left;font-weight: bold;">Repeat new password</label>
        <div class="col-md-4">
          <input id="passwordinput2" name="passwordA" type="password" placeholder="repeat password" class="form-control input-md" required>

        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic" style="text-align: left;font-weight: bold;">Change security question</label>
        <div class="col-md-4">
          <select id="questionInput" name="sec_question" class="form-control" required>
            <option value="Favorite Color">Favorite Color</option>
            <option value="Favorite Beverage">Favorite Beverage</option>
            <option value="Favorite Breed of Dog">Favorite Breed of Dog</option>
          </select>
        </div>
      </div>
      <br />
      <div class="form-group">
        <label class="col-md-4 control-label" for="secanswer" style="text-align: left;font-weight: bold;">Security answer</label>
        <div class="col-md-4">
          <input id="secanswer" name="sec_answer" type="text" placeholder="security answer" class="form-control input-md" required>

        </div>
      </div>
      <br />
      <div class="form-group">
        <label class="col-md-4 control-label" for="avatarInput" style="text-align: left;font-weight: bold;">Change Avatar</label>
        <div class="col-md-4">
          <!-- <input id="avatarInput" name="avatar" type="file" placeholder="new Pic" accept="image/*" class="form-control input-md"> -->
          <select id="selectPic" name="avatar" class="form-control" required>
            <option value="img/userPics/default.png">
              Default PNG!
            </option>
            <option value="img/userPics/pic1.png">
              Happy face FB profile!
            </option>
            <option value="img/userPics/pic2.jpg">
              Rare Creature?
            </option>
            <option value="img/userPics/pic3.png">
              Secret Profile Pic!
            </option>
            <option value="img/userPics/pic4.jpeg">
              The masters Photo..
            </option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <br />
      <div class="form-group">
        <div class="col-md-4">
          <button id="deleteAcc" name="delete" class="btn btn-danger"
          onclick="document.getElementById('destroyAcc').style.display='block'"
          style="font-weight: bold;" type="button">Delete Account</button>
        </div>
      </div>
      <br />
      <div class="form-group">
        <div class="col-md-4">
          <input id="submitUpdate" name="submit" class="btn btn-submit"
          style="font-weight: bold;" type="submit" value="Update Account!">
        </div>
      </div>

      </fieldset>
            <br />
      </form>
    </div>

    <div id="destroyAcc" class="destroy">
      <form class="destroy-content animate" method="POST" action="resources/utility/delete_user.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('destroyAcc').style.display='none'" class="close" title="Close PopUp">&times;</span>
          <img src="<?php echo $_SESSION['avatar'];?>
          " alt="Avatar" class="avatar">
          <h1 style="text-align:center">Delete Account?</h1>
        </div>
        <div class="popup_container">
          <input class="loginBtn" type="submit" value="submit">
      </form>
    </div>
  </div>
    <script>
      var delete = document.getElementById(deleteAcc);
      window.onclick = function(event) {
          if (event.target == delete) {
              delete.style.display = "none";
          }
      }
      function validate(){
        if(document.getElementById(passwordinput1) !== document.getElementById(passwordinput2)){
          alert("PASSWORDS DO NOT MATCH");
          return false;
        }
        if(document.getElementById(emailinput) == null ){
          alert("You forgot to fill out your email");
          return false;
        }
        if(document.getElementById(passwordinput) == null ){
          alert("You forgot to fill out your password");
          return false;
        }
        if(document.getElementById(questioninput) == null ){
          alert("You forgot to select a recovery Pass");
          return false;
        }
        if(document.getElementById(sec_answer) == null ){
          alert("You forgot to fill out your recovery answer");
          return false;
        }
        if(document.getElementById(selectPic) == null ){
          alert("You forgot to select an avatar!");
          return false;
        }
        }
    </script>
    <?php include 'resources/templates/mainFooter.php'; ?>
    <?php include 'resources/templates/loginPopup.php'; ?>
  </body>
</html>
