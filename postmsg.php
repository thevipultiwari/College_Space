<?php 
include 'dbconfigg.php';
$msg = $_POST['text'];
$name = $_POST['name'];
$sql = "INSERT INTO `chats` (`sno`, `msg`, `name`, `stime`) VALUES (NULL, '$msg', '$name', CURRENT_TIMESTAMP);";

mysqli_query($conn, $sql);
mysqli_close($conn);
?>