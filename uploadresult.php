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
require_once('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require_once('spreadsheet-reader-master/SpreadsheetReader.php');
$flag=1;
if (isset($_POST["import"]))
{
       
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $regno = "";
                if(isset($Row[0])) {
                    $regno = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $Name = "";
                if(isset($Row[1])) {
                    $Name = mysqli_real_escape_string($conn,$Row[1]);
                }
                $sub1 = "";
                if(isset($Row[1])) {
                    $sub1 = mysqli_real_escape_string($conn,$Row[2]);
                }
                $sub2 = "";
                if(isset($Row[1])) {
                    $sub2 = mysqli_real_escape_string($conn,$Row[3]);
                }
                $sub3 = "";
                if(isset($Row[1])) {
                    $sub3 = mysqli_real_escape_string($conn,$Row[4]);
                }
                $sub4 = "";
                if(isset($Row[1])) {
                    $sub4 = mysqli_real_escape_string($conn,$Row[5]);
                }
                $sub5 = "";
                if(isset($Row[1])) {
                    $sub5 = mysqli_real_escape_string($conn,$Row[6]);
                }
                $sub6 = "";
                if(isset($Row[1])) {
                    $sub6 = mysqli_real_escape_string($conn,$Row[7]);
                }
                $sub7 = "";
                if(isset($Row[1])) {
                    $sub7 = mysqli_real_escape_string($conn,$Row[8]);
                }
                $sub8 = "";
                if(isset($Row[1])) {
                    $sub8 = mysqli_real_escape_string($conn,$Row[9]);
                }
                $ia1 = "";
                if(isset($Row[1])) {
                    $ia1 = mysqli_real_escape_string($conn,$Row[10]);
                }
                $ia2 = "";
                if(isset($Row[1])) {
                    $ia2 = mysqli_real_escape_string($conn,$Row[11]);
                }
                $ia3 = "";
                if(isset($Row[1])) {
                    $ia3 = mysqli_real_escape_string($conn,$Row[12]);
                }
                $ia4 = "";
                if(isset($Row[1])) {
                    $ia4 = mysqli_real_escape_string($conn,$Row[13]);
                }
                $ia5 = "";
                if(isset($Row[1])) {
                    $ia5 = mysqli_real_escape_string($conn,$Row[14]);
                }
                $ia6 = "";
                if(isset($Row[1])) {
                    $ia6 = mysqli_real_escape_string($conn,$Row[15]);
                }
                $ia7 = "";
                if(isset($Row[1])) {
                    $ia7 = mysqli_real_escape_string($conn,$Row[16]);
                }
                $ia8 = "";
                if(isset($Row[1])) {
                    $ia8 = mysqli_real_escape_string($conn,$Row[17]);
                }
                $total = "";
                if(isset($Row[1])) {
                    $total = mysqli_real_escape_string($conn,$Row[18]);
                }
                $result = "";
                if(isset($Row[1])) {
                    $result = mysqli_real_escape_string($conn,$Row[19]);
                }
                $slot=$_POST['year'];
                
               
                    $query = "INSERT INTO `res` (`id`, `regno`, `Name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `ia1`, `ia2`, `ia3`, `ia4`, `ia5`, `ia6`, `ia7`, `ia8`, `total`, `result`, `slot`) VALUES (NULL, '$regno', '$Name', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$sub7', '$sub8', '$ia1', '$ia2', '$ia3', '$ia4', '$ia5', '$ia6', '$ia7', '$ia8', '$total', '$result', '$slot')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $flag=1;
                    } else {
                        $flag=0;
                    }
                
             }
        
         }
         if ($flag==1) {
                        echo '<script>alert("Uploaded Succesfully")</script>';
                        echo '<META http-equiv="refresh" content="0;addresult.php">';
                    } else {
                        echo '<script>alert("Error")</script>';
                        echo '<META http-equiv="refresh" content="0;addresult.php">';
                    }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

