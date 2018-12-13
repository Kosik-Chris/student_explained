<?php
  require('config/config.php');
  session_start();
  ?>
<html lang="en" dir="ltr">
  <head>
    <?php include 'resources/templates/mainHeader.php'; ?>
    <title>Student Explained</title>
  </head>
  <body>
  <?php include_once ('resources/templates/navbarMain.php'); ?>
  <div class="mainContainer">
    <div class="formContainer">
      <div class="formContents">
        <h2 class="formHeader">Get Started Here</h2>
        <div class="formContainerInner">
          <form action="login.php" method="POST">
              <h5>Email</h5><br />
              <input type="text" name="email">
              <h5>Password</h5><br />
              <input type="text" name="password">
            <br />
            <input type="submit"/>
          </form>
        </div>
      </div>
    </div>
    <div class"modelContainer">
      <div class='modelo-wrapper'> <div style=" padding-bottom: 0%; padding-right: 0%; position: relative"> <div style="position: absolute; top: 0; bottom: 0; left: 50vw; right: 0;">
        <iframe src="https://app.modelo.io/embedded/-bm5Jue1Jx?viewport=true&autoplay=true"
        frameborder="0" mozallowfullscreen webkitallowfullscreen allowfullscreen >
        </iframe>
          </div>
         </div>
       <!-- <p style="font-size: 13px; font-weight: bold; margin: 10px 10px 10px 10px; color: #A9DBB9;">(Above):<br />
         B+_Model_v4: <span style="font-weight: bold;">By</span> Christopher Kosik</p> -->
      </div>
    </div>
  </div>
<?php include 'resources/templates/mainFooter.php'; ?>
<?php include 'resources/templates/loginPopup.php'; ?>

<?php
  if(isset($_SESSION['email'])){
   redirect();
  }
?>
  </body>
</html>
