<html>
<head>
  <?php include 'resources/templates/mainHeader.php'; ?>
  <title>Arduino Preface</title>

</head>
  <body>
  <?php include_once ('resources/templates/navbarMain.php'); ?>
  <?php include 'resources/templates/sidebar.php'; ?>
  <div style="background-color: #E7F0F9">

  <h3 style="text-align: center;">Arduino Basics</h3>
  <p>
    Arduino Programs are called <b>Sketches</b> they are a form of simplified C++.
    Arduino programs can be divided in three main parts: <b>Structure</b>, <b>Values</b> (variables and constants), and <b>Functions</b>.
  </p>
  <h6 style="text-align: center;">Structure</h6>
  <p>
    All programs have a <b>Setup</b> part and a <b>Loop</b> part.
    This allows you to get your program ready and then run it continuously in the loop function.
    The Setup function only runs once per power up/ reset and is where you define input and output characteristics.
  </p>
  <p>
    The Loop function allows your program to loop continuously.
  </p>
  <h6 style="text-align: center;">Values</h6>
  <p>
    Values in arduino have nearly the same meaning as in other program languages.
    For example: the primitive types of int, byte, word, and char all apply.
  </p>
  <h6 style="text-align: center;">Functions</h6>
    Functions in Arduino function exactly the same as in any C++ or C program.
    They can accept paramters and be used to perform certain parts of your code.
    An example function could be:</br> int doMath (int x, int y){<br />
      int z = 0;<br />
      z = x+y;<br />
      return z; // this function returns z!<br />
    }
  <br />
<h3 style="text-align: center;">Improvements to come!</h3>
<br />
  </div>
  <?php include 'resources/templates/mainFooter.php'; ?>
  <?php include 'resources/templates/loginPopup.php'; ?>
  </body>
</html>
