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
    $records = mysqli_query($conn, "SELECT * FROM `studentdetails` where username='$user'"); // fetch data from database
                    while ($row = mysqli_fetch_array($records)) {
                        $course=$row['course'];
                    }
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM $course WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'materials/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>

