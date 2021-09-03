<?php

 session_start();
    if(isset($_SESSION['adminid']) && isset($_SESSION['adminpswd']))
    {
        $user=$_SESSION['adminid'];
        $pass=$_SESSION['adminpswd'];
    }
    else
    {
      echo '<script>alert("plzz login")</script>';
	echo '<META http-equiv="refresh" content="0;logout.php">';
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/anurati" rel="stylesheet">

        <title></title>
    </head> 
    <body>
        <div class="navbar1">
            <span class="logo1">DSCE</span>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="addfaculty.php">ADD FACULTY</a></li>
                <li><a href="viewstudent.php">VIEW STUDENT</a></li>
                <li><a href="viewfaculty.php">VIEW FACULTY</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="details">
            <form action="addstudentdetails.php" method="POST">
                <h1>ADD STUDENT</h1><br/><br/>
                <div class="rows">
                    <div class="input-group">
                        <input type="text" name="Fname" id="Fname" required>
                        <label for="Fname">STUDENT FIRST NAME</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="usn" id="usn" required>
                        <label for="usn">STUDENT USN</label>
                    </div>
                </div>
                <div class="input-group">
                    <input type="date" name="dob" id="dob" required>
                    <label for="dob">STUDENT DOB</label>
                </div>
                <div class="input-group">
                    <input type="text" name="course" id="course" required>
                    <label for="course">STUDENT COURSE</label>
                </div>
                <div class="input-group">
                    <input type="text" name="username" id="username" required>
                    <label for="username">STUDENT USERNAME</label>
                </div>
                <div class="input-group">
                    <input type="password" name="pswd" id="pswd" required>
                    <label for="pswd">STUDENT PASSWORD</label>
                </div>
                <button type="submit" class="btn btn-primary" name="stu-sub">SUBMIT</button>
            </form>
        </div>
        <div id="footer">
            <p>Copyright &copy; DSCE | <a href="#">BANGALORE</a> | <a href="#">2020</a> </p>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>