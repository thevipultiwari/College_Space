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
    
        $id=$_GET['id'];
        $sql="delete from facultydetails where id='$id'";
         include 'dbconfigg.php';
         if(mysqli_query($conn,$sql))
            {
               echo '<script>alert("faculty record Deleted Successful")</script>';
        echo '<meta http-equiv="refresh" content="0;viewfaculty.php"/>';
            }
            else
            {
                echo "deleted unsuccessfull";
            }
        ?>
