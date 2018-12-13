<?php
// Initialize the session
session_start();
include('session.php');
// Check if the user is logged in, if not then redirect him to login page
?>
<html lang="en">
<head>
    <?php include 'resources/templates/mainHeader.php'; ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDd7_vdq8Q4SHG9v61TWmOdBjSVatvbi0s'></script>
</head>
<body>
  <?php include_once ('resources/templates/navbarMain.php'); ?>
  <?php include 'resources/templates/sidebar.php'; ?>
    <!-- <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h1>
    </div> -->
    <div class="welcomeDiv">
      <div class="dashboard">
        <?php
         echo '<img src="';
         echo htmlspecialchars($_SESSION["avatar"]);
         echo '" alt="Your avatar!" width="150px" height="150px"';
         ?>
         <b style="text-align:center;">Welcome</b> <?php echo htmlspecialchars($_SESSION["email"]); ?>!
         <h1>Top Messages</h1>
         <div id="topMsgDiv">
         </div>
      </div>
      <br />
      <h2 style="text-align: center">Where Student Explained is based out of:</h2>
      <br />
      <div class="mapouter" style="margin: auto;">
        <div class="gmap_canvas">
          <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Western%20michigan%20University&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

          </iframe><a href="https://www.pureblack.de/webdesign-nuernberg/"></a>
        </div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style>
      </div>
    </div>
    <?php include 'resources/templates/mainFooter.php'; ?>
    <?php include 'resources/templates/loginPopup.php'; ?>
</body>
</html>
