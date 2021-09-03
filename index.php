<!DOCTYPE html>
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
        <div class="page">
        <div class="banner">
            <div class="navbar">
                <span class="logo">DSCE</span>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><div class="dropdown">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                COURSES
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#cse">CSE</a>
                                <a class="dropdown-item" href="#ec">ECE</a>
                                <a class="dropdown-item" href="#me">ME</a>
                                <a class="dropdown-item" href="#ce">CE</a>
                                <a class="dropdown-item" href="#ee">EEE</a>
                            </div>
                        </div></li>
                    <li><a href="viewmarks.php">STUDENT MARKS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    
                    <li><div class="dropdown">
                            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://img.icons8.com/ios/50/ffffff/login-rounded-right--v1.png"/>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="studentlogin.php">STUDENT</a>
                                <a class="dropdown-item" href="facultylogin.php">FACULTY</a>
                                <a class="dropdown-item" href="adminlogin.php">ADMIN</a>
                                
                            </div>
                        </div></li>
                </ul>
            </div>
            <div class="content">
                <div class="title">
                    DAYANANDA SAGAR COLLEGE OF ENGINEERING
                </div>
                <p>Get everything on your fingertips</p>
                <a href="chatroom.php"><button type="button">CHATBOX</button></a>
            </div>
        </div>
        <div class="container" id="courses">
            <h1>COURSES</h1>

            <div class="row" id="cse">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/cse.png" class="images">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <h2>COMPUTER SCIENCE</h2>
                    <p>Get all your study material related to CSE</p>
                    <a href="studymaterials.php?course=cs"><button class="btn btn-primary">STUDY MATERIAL</button></a>
                </div>
            </div>
            <div class="row" id="ec">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <h2>ELECTRONIC AND COMMUNICATION</h2>
                    <p>Get all your study material related to ECE</p>
                    <a href="studymaterials.php?course=ec"><button class="btn btn-primary">STUDY MATERIAL</button></a>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/ec.jpg" class="images">
                </div>
            </div>
            <div class="row" id="me">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/me.jpg" class="images">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <h2>MECHANICAL ENGINEERING</h2>
                    <p>Get all your study material related to ME</p>
                    <a href="studymaterials.php?course=me"><button class="btn btn-primary">STUDY MATERIAL</button></a>
                </div>
            </div>
            <div class="row" id="ce">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <h2>CIVIL ENGINEERING</h2>
                    <p>Get all your study material related to CE</p>
                    <a href="studymaterials.php?course=ce"><button class="btn btn-primary">STUDY MATERIAL</button></a>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/ce.png " class="images">
                </div>
            </div>
            <div class="row" id="ee">
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <img src="images/ee.jpg" class="images">
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <h2>ELECTRIC AND ELECTRONIC</h2>
                    <p>Get all your study material related to EEE</p>
                    <a href="studymaterials.php?course=ee"><button class="btn btn-primary">STUDY MATERIAL</button></a>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>Copyright &copy; DSCE | <a href="#">BANGALORE</a> | <a href="#">2020</a> </p>
        </div>
    </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
