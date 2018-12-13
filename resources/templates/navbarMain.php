<?php
echo '<nav class="navbar navbar-expand-lg">
      <a class="navbar-brand nav-logo" href="index.php"><img src="img/siteIcon.png" height="48" width="48" alt="Student Explained"></a>
      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="starting.php">
              Starting Out
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalog.php">
              Catalog
            </a>
          </li>
        </ul>
    <div class="ml-md-auto rightSection">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="register.php" style="padding-right: 25px; padding-top:15px;">
          Register
        </a>
      </li>
      <li class="nav-link">
        <button class="loginBtn"onclick="document.getElementById(\'modal-wrapper\').style.display=\'block\'">Login</button>
      </li>
    </div>
      </div>
  </nav>
  <br />';
?>
