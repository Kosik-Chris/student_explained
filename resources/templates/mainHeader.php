<?php
  echo '<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="HomePage for Student Explained - Rasp+">
      <!--############### CDN SECTION ################# -->
      <!--CDN JQUERY Google-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--Check to ensure Jquery has loaded -->
      <!--<script>window.jQuery || document.write("<script src="../../js/libs/jquery-3.3.1.min.js">\x3C/script>")</script>-->
      <!--CDN Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
      <!--CDN Boostrap CSS & JS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
       integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
       crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
      <script src="https:www.google.com/recaptcha/api.js"></script>
      <script type="text/javascript" src="js/custom/main.js"></script>
      <script
        src="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.13.0/js/okta-sign-in.min.js"
        type="text/javascript">
      </script>
      <!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script
      <link
        href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.13.0/css/okta-sign-in.min.css"
        type="text/css"
        rel="stylesheet"/>
      <link
        href="https://ok1static.oktacdn.com/assets/js/sdk/okta-signin-widget/2.13.0/css/okta-theme.css"
        type="text/css" rel="stylesheet"/>
      <link rel="stylesheet" href="css/custom/main.css" />
      <link rel="icon" type="image/png" href="img/siteIcon.png"/>
      <title>Student Explained</title>';

      function redirect() {
              echo '<script> location.replace("welcome.php"); </script>';
          }
 ?>
