<?php
if(isset($_POST['stu-sub'])){
$sfname=$_POST['Fname'];
$usn=$_POST['usn'];
$dob=$_POST['dob'];
$username=$_POST['username'];
$pswd=$_POST['pswd'];
$course=$_POST['course'];
include 'dbconfigg.php';
$query = "INSERT INTO studentdetails(`fname`, `usn`, `DOB`,`course`, `username`, `password`) VALUES ('$sfname','$usn','$dob','$course','$username','$pswd');";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("student record uploaded ")</script>';
        
        echo '<meta http-equiv="refresh" content="0;addstudent.php"/>';
    }
 else {
        echo '<script type="text/javascript">alert("student record upload fail")</script>';
        echo '<meta http-equiv="refresh" content="0;addstudent.php"/>';
    }
}
?>
