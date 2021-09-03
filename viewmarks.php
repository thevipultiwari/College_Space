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
                <li><a href="index.php#courses">COURSES</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="marks">
            <h1>WELCOME TO DAYANANDA SAGAR COLLEGE OF ENGINEERING</h1>
            <p>Know your marks with a click</p>
            <hr>
        </div>
        <div><center>
                <form action="" method="post">
                    <div class="form_settings">
                        <p><span><b>REG NO</b></span><input class="contact" type="text" name="regno" value="" required/></p>
                        <p><span>Year And Month</span><select name="year" required>
                                <?php
                                include 'dbconfigg.php';
                                $sql = "SELECT DISTINCT slot FROM `res`";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                                        $slot = $row['slot'];
                                        echo "<option value ='$slot'>$slot</option>";
                                    }
                                }
                                ?>
                            </select></p>
                        <p style="padding-top: 15px"><span>&nbsp;</span><button type="submit" id="submit" name="view" class="btn-primary btn">View</button></p>
                    </div>
                </form>
                <?php
                if (isset($_POST['view'])) {

                    $regno = $_POST['regno'];
                    $year = $_POST['year'];

                    $records = mysqli_query($conn, "SELECT * FROM `res` where regno='$regno' and slot='$year'"); // fetch data from database
                    while ($row1 = mysqli_fetch_array($records)) {
                        echo "<b>Name: </b>" . $row1['Name'];
                        echo "<br><b>RegNO: </b>" . $row1['regno'];
                        echo "<table class='table'><tr><th>Subject</th><th>External Marks</th><th>Internal Marks</th></tr>";
                        echo "<tr><td>Subject1</td><td>" . $row1['sub1'] . " </td><td>" . $row1['ia1'] . "</td></tr>";
                        echo "<tr><td>Subject2</td><td>" . $row1['sub2'] . " </td><td>" . $row1['ia2'] . "</td></tr>";
                        echo "<tr><td>Subject3</td><td>" . $row1['sub3'] . " </td><td>" . $row1['ia3'] . "</td></tr>";
                        echo "<tr><td>Subject4</td><td>" . $row1['sub4'] . " </td><td>" . $row1['ia4'] . "</td></tr>";
                        echo "<tr><td>Subject5</td><td>" . $row1['sub5'] . " </td><td>" . $row1['ia5'] . "</td></tr>";
                        echo "<tr><td>Subject6</td><td>" . $row1['sub6'] . " </td><td>" . $row1['ia6'] . "</td></tr>";
                        echo "<tr><td>Subject7</td><td>" . $row1['sub7'] . " </td><td>" . $row1['ia7'] . "</td></tr>";
                        echo "<tr><td>Subject8</td><td>" . $row1['sub8'] . " </td><td>" . $row1['ia8'] . "</td></tr>";
                        echo "</table>";
                        echo "<b>Total: </b>" . $row1['total'];
                        echo "<br><b>Result: </b>" . $row1['result'] . "<br><br>";
                    }
                }
                ?>
            </center>
        </div>
        <div id="footer">
            <p>Copyright &copy; DSCE | <a href="#">BANGALORE</a> | <a href="#">2020</a> </p>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
