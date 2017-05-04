<?php

include('db.php');

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> PHP chat system</title>
    <link rel="stylesheet" href="style.css" media="all"/>
      <script>

        function ajax(){

        var req = new XMLHttpRequest();

        req.onreadystatechange = function(){

          if(req.readyState == 4 && req.status == 200){

              document.getElementById('chat').innerHTML = req.responseText;
            }
          }

          req.open('GET','chat.php','true');
          req.send();
        }
        setInterval(function(){ajax()},1000);
      </script>
  </head>
  <body onload="ajax();">
    <p>

<br>
<br>
<br>


    </p>
      <div id="container">
          <div id="chat_box">
            <div id="chat"></div>
          </div> <!-- chat_box-->

          <form method="post" action="index.php">
              <input type="text" name="name" placeholder="    enter name"/>
              <textarea name="msg" placeholder="  enter message"></textarea>
              <input type="submit" name="submit" value="Send it"/>
          </form>

<?php
if(isset($_POST["submit"]) && !empty($_POST["msg"]) && !empty($_POST["name"])){

  $name = $_POST['name'];
  $msg = $_POST['msg'];

$query = "INSERT INTO chat (name, msg) values('$name','$msg')";

$run = $con->query($query);

if($run){

  echo "<embed loop='false' src='hallelujah.wav' hidden='true' autoplay='true' />";

  }
}
 ?>


        </div>
  </body>
</html>
