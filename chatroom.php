<?php
  include('msgs.php');
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'resources/templates/mainHeader.php'; ?>
  <?php include 'resources/templates/sidebar.php'; ?>
  <style type = "text/css">
    textarea{
      border-radius: 2%;
      display: block;
      width: 50%;
      margin: auto;
    }
    #thread{
      border: 1px #d3d3d3 solid;
      height: 500px;
      width: 90%;
      overflow: scroll;
      display: inline-block;
      float: left;
      margin-left: 50px;
      background-color: white;
    }
  </style>
</head>
<body>
  <?php include_once ('resources/templates/navbarMain.php'); ?>
    <div id="thread">
      <?php
        $select = "SELECT * FROM message";
        $query = mysqli_query($link,$select);
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
          echo '<img src="';
          echo $row['avatar'];
          echo '" alt="avatar" width="48px" height="48px">';
          echo $row['email']. ": ". $row['message']."<form method=\"POST\" action=\"like.php\">
                    <input type=\"hidden\" name=\"like\" value =1/>
                   <input type=\"submit\" name=\"submit\" class=\"like\" value=\"like\" />
                 </form>
                 <form method=\"POST\" action=\"dislike.php\">
                  <input type=\"hidden\" name=\"dislike\" value=1/>
                   <button type=\"submit\" name=\"submit\" class=\"dislike\" value=\"submit\">Dislike</button>
                 </form>";
          echo 'Number Likes: '.$row['likes']." Number Dislikes: ".$row['dislikes']."<hr><br>";
        }
       ?>
    </div>
      </div>
    <form method="post" action="msgs.php" class="chatroomForm">
      <textarea name="message" id="message" rows="4" cols="35"></textarea>
      <div id="chatFilter" style="width: 70%; height: 48px;">
        <select id="filterChat" name="hash" style="float: left; margin-left: 0vw;
        margin-right: 40%;">
        <option value=" ">
          none
        </option>
          <option value="#lol">
            #lol
          </option>
          <option value="#endme">
            #end me
          </option>
        </select>
      </div>
      <button type="submit" name="submit" style="display: block; margin: auto;" class="submitFormBtn">Submit</button>
    </form>

    <script type="text/javascript">
      var message = document.getElementById('filterChat');

      if(message.charAt(0) == '#'){

      }
    </script>
   <?php include 'resources/templates/mainFooter.php'; ?>
   <?php include 'resources/templates/loginPopup.php'; ?>
 </body>
</html>
