<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                   
                     <div class="row">
                <div class="col-lg-12">
                    
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="javascript:history.go(-1)">Dashboard</a></li>
                        <li><i class="fa fa-laptop"></i>addadmin</li>                          
                    </ol>
                </div>
            </div>
 
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>register new admin</h3>
                            		<p>Enter credentials</p>
                                    <?php
require "conect.inc.php";
if(isset($_POST['uname'])&&isset($_POST['passwd'])&&isset($_POST['imag'])){
$uname = $_POST['uname'];
$pass = $_POST['passwd'];
$image = $_POST['imag'];
$passhash = md5($pass);
$sql = "INSERT INTO `admin`.`services` (`uname`,`password`,`img`) VALUES ('$uname','$passhash','$image')";
if(mysql_query($sql)){
    echo '<p style="color:green">New Admin  added</p>';
}
else {
    echo '<p style="color:red">try again later!</p>';
}
}
                            

?>

                        			
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                           <div class="form-bottom">
                                <form role="form" action="" method="post" class="registration-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="uname" placeholder=" name..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="passwd" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">image</label>
                                        <input type="text" name="imag" placeholder=" imagepath..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
        
                                    
                                                                           <button type="submit" class="btn">Add admin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<?php

?>