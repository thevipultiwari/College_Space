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

if(isset($_POST['fac-sub'])){
$faname=$_POST['Faname'];
$course=$_POST['course'];
$subject=$_POST['subject'];
$fusername=$_POST['fusername'];
$fpswd=$_POST['fpswd'];
include 'dbconfigg.php';
$query = "INSERT INTO facultydetails(`name`, `course`, `subject`, `username`, `pswd`) VALUES ('$faname','$course','$subject','$fusername','$fpswd');";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("faculty record uploaded ")</script>';
        
        echo '<meta http-equiv="refresh" content="0;addfaculty.php"/>';
    }
 else {
        echo '<script type="text/javascript">alert("faculty record upload fail")</script>';
        echo '<meta http-equiv="refresh" content="0;addfaculty.php"/>';
    }
}
?>