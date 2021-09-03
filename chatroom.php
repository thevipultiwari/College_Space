<?php

 session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user=$_SESSION['username'];
        $pass=$_SESSION['password'];
        include 'dbconfigg.php';
    }
    else
    {
      echo '<script>alert("login to enter chatbox")</script>';
	echo '<META http-equiv="refresh" content="0;logout.php">';
    }
     
$sql = "SELECT * FROM studentdetails WHERE username = '$user'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result))
    {
         $n=$row['fname'];
    }
     }

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.cdnfonts.com/css/anurati" rel="stylesheet">
        <meta charset="UTF-8">

        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
        <style>
            .chats {
                margin: 0 auto;
                max-width: 800px;
                padding: 0 20px;
            }

            .containers {
                border: 2px solid #dedede;
                background-color: #f1f1f1;
                border-radius: 5px;
                padding: 10px;
                margin: 10px 0;
            }

            .darker {
                border-color: #ccc;
                background-color: #ddd;
            }

            .containers::after {
                content: "";
                clear: both;
                display: table;
            }

            .containers img {
                float: left;
                max-width: 60px;
                width: 100%;
                margin-right: 20px;
                border-radius: 50%;
            }

            .containers img.right {
                float: right;
                margin-left: 20px;
                margin-right:0;
            }

            .time-right {
                float: right;
                color: #aaa;
            }

            .time-left {
                float: left;
                color: #999;
            }
        </style>

    </head>
    <body>
        <div class="navbar1">
            <span class="logo1">DSCE</span>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="chats">
    <center><h2>Chat Messages</h2></center>

    <div class="containers">
        <div class="scroll">
        
        </div>
    </div>

    
    <input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add message.."><br/>
    <button class="btn btn-primary" name="submitmsg" id="submitmsg">Send</button>        
        </div>
        
            <div id="footer">
                <p>Copyright &copy; DSCE | <a href="#">BANGALORE</a> | <a href="#">2020</a> </p>
            </div>
        <?php
        echo $n;
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
        </script>
        <script type="text/javascript">
            //check new msg every second
            setInterval(runFunction,500);
            function runFunction(){
                $.post("htcont.php",
                function(data,status){
                    document.getElementsByClassName('scroll')[0].innerHTML = data;
                }
                        );
            }
            // Get the input field
var input = document.getElementById("usermsg");


input.addEventListener("keyup", function(event) {

  if (event.keyCode === 13) {

    event.preventDefault();

    document.getElementById("submitmsg").click();
  }
});
            $("#submitmsg").click(function(){
                var clientmsg= $("#usermsg").val();
                
  $.post("postmsg.php", {text: clientmsg, name:'<?php echo $n ?>'},
  function(data, status){
      document.getElementsByClassName('scroll')[0].innerHTML = data;});
  $("#usermsg").val("");
      return false;
  });
        </script>
        
        
</body>
</html>
