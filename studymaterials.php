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
    $course=$_GET['course'];
    
                    
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
                
                
                
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        
        
        <center><span class="h1">STUDY MATERIALS</span></center><br/><br/>
    <div class="table">
        <?php
            
        $sql = "SELECT * FROM $course";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">SNO.</th>
                    <th scope="col">FILENAME</th>
                    <th scope="col">SIZE</th>
                    

                </tr>
            </thead>
            <tbody>
        <?php
        $i=0;
        foreach ($files as $file): $i=$i+1;?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

            </tbody>
        </table>
    </div>
        <div id="footer">
            <p>Copyright &copy; DSCE | <a href="#">BANGALORE</a> | <a href="#">2020</a> </p>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>