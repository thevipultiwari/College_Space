<?php
session_start();
if (isset($_SESSION['facname']) && isset($_SESSION['facpswd'])) {
    $user = $_SESSION['facname'];
    $pass = $_SESSION['facpswd'];
} else {
    echo '<script>alert("please login")</script>';
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
                <li><a href="addresult.php">ADD RESULT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="details">
            <form action="uploadattendance.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                <h1><b>ADD ATTENDANCE</b></h1><br/><br/>

                <div class="input-group">
                    <input type="file" name="file" id="file" required accept=".xls,.xlsx">
                    <label for="file">FILE</label>
                </div>
                <div class="input-group">
                    <input type="text" name="DATE" id="DATE" required>
                    <label for="DATE">DATE</label>
                </div>

                <button type="submit" class="btn btn-primary" name="import">UPLOAD</button>
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