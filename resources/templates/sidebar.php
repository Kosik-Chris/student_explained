<?php
  echo '<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Student Explained</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Tutorials & More</p>
            <li class="active">
                <a href="#hardTutorialSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Hardware Tutorials</a>
                <ul class="collapse list-unstyled" id="hardTutorialSubmenu">
                    <li>
                        <a href="arduino.php">Arduino Uno</a>
                    </li>
                    <li>
                        <a href="raspberryPi.php">Raspberry Pi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#softTutorialSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Software Tutorials</a>
                <ul class="collapse list-unstyled" id="softTutorialSubmenu">
                    <li>
                        <a href="languagePreface.php">Languages</a>
                    </li>
                    <li>
                        <a href="operatingSystemPreface.php">Os</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="chatroom.php">Chatroom</a>
            </li>
            <li>
                <a href="account.php">Account</a>
            </li>
            <li>
              <a href="resources/utility/logout.php">Sign Out</a>
            </li>
        </ul>

    </nav>
    <!-- Page Content -->
    <div id="content">

        <nav class="navbar navbar-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>User Navigation</span>
                </button>
            </div>
        </nav>
    </div>
</div>';

 ?>
