<?php
 session_start();
    if(isset($_SESSION['facname']) && isset($_SESSION['facpswd']))
    {
        $user=$_SESSION['facname'];
        $pass=$_SESSION['facpswd'];
        
    }
    else
    {
      echo '<script>alert("please login")</script>';
	echo '<META http-equiv="refresh" content="0;logout.php">';
    }
    include 'dbconfigg.php';
$records = mysqli_query($conn, "SELECT * FROM `facultydetails` where username='$user'"); // fetch data from database
                    while ($row = mysqli_fetch_array($records)) {
                        $course=$row['course'];
                    }

// connect to the database


// Uploads files
if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'materials/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
     echo '<script type="text/javascript">alert("You file extension must be .zip, .pdf or .docx")</script>';
        echo '<meta http-equiv="refresh" content="0;addmaterials.php"/>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO $course (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">alert("File uploaded successfully")</script>';
        echo '<meta http-equiv="refresh" content="0;addmaterials.php"/>';
                
            }
        } else {
            echo '<script type="text/javascript">alert("Failed to upload file.")</script>';
        echo '<meta http-equiv="refresh" content="0;addmaterials.php"/>';
            
        }
    }
}