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

        $targetPath = 'uploadresult/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $USN = "";
                if(isset($Row[0])) {
                    $USN = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $month_year = "";
                if(isset($Row[1])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[1]);
                }
                $_1 = "";
                if(isset($Row[2])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[2]);
                }
                $_2 = "";
                if(isset($Row[3])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[3]);
                }
                $_3 = "";
                if(isset($Row[4])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[4]);
                }
                $_4= "";
                if(isset($Row[5])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[5]);
                }
                $_5 = "";
                if(isset($Row[6])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[6]);
                }
                $_6 = "";
                if(isset($Row[7])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[7]);
                }
                $_7 = "";
                if(isset($Row[8])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[8]);
                }
                $_8 = "";
                if(isset($Row[9])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[9]);
                }
                $_9 = "";
                if(isset($Row[10])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[0]);
                }
                $_10 = "";
                if(isset($Row[11])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[11]);
                }
                $_11 = "";
                if(isset($Row[12])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[12]);
                }
                $_12 = "";
                if(isset($Row[13])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[13]);
                }
                $_13 = "";
                if(isset($Row[14])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[14]);
                }
                $_14 = "";
                if(isset($Row[15])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[15]);
                }
                $_15 = "";
                if(isset($Row[16])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[16]);
                }
                $_16 = "";
                if(isset($Row[17])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[17]);
                }
                $_17 = "";
                if(isset($Row[18])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[18]);
                }
                $_18 = "";
                if(isset($Row[19])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[19]);
                }
                $_19 = "";
                if(isset($Row[20])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[20]);
                }
                $_20 = "";
                if(isset($Row[21])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[21]);
                }
                $_21 = "";
                if(isset($Row[22])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[22]);
                }
                $_22 = "";
                if(isset($Row[23])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[23]);
                }
                $_23 = "";
                if(isset($Row[24])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[24]);
                }
                $_24 = "";
                if(isset($Row[25])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[25]);
                }
                $_25 = "";
                if(isset($Row[26])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[26]);
                }
                $_26 = "";
                if(isset($Row[27])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[27]);
                }
                $_27 = "";
                if(isset($Row[28])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[28]);
                }
                $_28 = "";
                if(isset($Row[29])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[29]);
                }
                $_29 = "";
                if(isset($Row[30])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[30]);
                }
                $_30 = "";
                if(isset($Row[31])) {
                    $attendance = mysqli_real_escape_string($conn,$Row[31]);
                }
                
                
                $slot=$_POST['DATE'];
                
               
                    $query = "INSERT INTO `attendance` (`id`, `USN`, `month_year`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `day8`, `day9`, `day10`, `day11`, `day12`, `day13`, `day14`, `day15`, `day16`, `day17`, `day18`, `day19`, `day20`, `day21`, `day22`, `day23`, `day24`, `day25`, `day26`, `day27`, `day28`, `day29`, `day30`) VALUES (NULL, '$USN', '$month_year', '$_1', '$_2', '$_3', '$_4', '$_5', '$_6', '$_7', '$_8', '$_9', '$_10', '$_11', '$_12', '$_13', '$_14', '$_15', '$_16', '$_17', '$_18', '$_19', '$_20', '$_21', '$_22', '$_23', '$_24', '$_25', '$_26', '$_27', '$_28', '$_29', '$_30')";
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
                        echo '<META http-equiv="refresh" content="10;addattendance.php">';
                    } else {
                        echo '<script>alert("Error")</script>';
                        echo '<META http-equiv="refresh" content="0;addattendance.php">';
                    }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

