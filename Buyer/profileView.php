<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}

    if($_SESSION['picStatus'] == 0)
    {
        $_SESSION['picId'] = 0;
        $_SESSION['picName'] = "profile0.png";
    } 
    
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />

    </head>


    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <!-- <img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>"  -->
                    <span>
                        <img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" 
                        class="image-circle" class="img-responsive" >
                    </span>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <h4 style="color: black;"><?php echo $_SESSION['Username'];?></h4>
                    <br>
                </center>
                </header>
                    <center>
                        <div class="row" style="display:flex; align-items:center; justify-content:center;">
                            <div class="row">
                                <div class="col-3">
                                    <b><font size="+1" color="black">Mobile No : </font></b>
                                    <font size="+1"><?php echo $_SESSION['Mobile'];?></font>
                                </div>
    
                                <div class="col-3">
                                <b><font size="+1" color="black">Email ID : </font></b>
                                <font size="+1"><?php echo $_SESSION['Email'];?></font>
                                </div>
    
                                <div class="col-3">
                                <b><font size="+1" color="black">ADDRESS : </font></b>
                                <font size="+1"><?php echo $_SESSION['Addr'];?></font>
                                </div>
                            </div>
                            
                        </div>
                    </center>           

                        <div class="12u$" style="display:flex; align-items:center; justify-content:center; margin-top:40px">
                            <center>
                                <div class="row uniform">
                                    <div class="3u 12u$(large)">
                                        <a href="changePassPage.php" class="btn btn-danger" style="text-decoration: none; margin-right:40px">Change Password</a>
                                    </div>
                                    <div class="3u 12u$(large)">
                                        <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;  margin-left: 30px">Edit Profile</a>
                                    </div>
                                    
                                    <div class="3u 12u$(large)">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none; margin-left:30px">LOG OUT</a>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>



    </body>
</html>
