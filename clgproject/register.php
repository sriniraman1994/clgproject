
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

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
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="login.php">login</a>
                    </li>
                    
                      <li>
                        <a href="SrinivasanSeetharaman.html">Credits</a>
                    </li>
     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                   
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Signup for free</h3>
                            		<p>All the fields are required:</p>
                        			
                        		</div>
                        		<div>
                        			<?php
	require "core.inc.php";
	require "conect.inc.php";
	error_reporting(E_NOTICE);
	if (!login())
	{
		if (isset($_POST['cusname'])&&isset($_POST['age'])&&isset($_POST['gender'])&&isset($_POST['phnum'])&&isset($_POST['email'])&&isset($_POST['uname'])&&isset($_POST['pass'])&&isset($_POST['repass']))
		{
			$cusname = $_POST['cusname'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];

			$phnum = $_POST['phnum'];
			$email = $_POST['email'];
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			$repass = $_POST['repass'];
			$passhash = md5($pass);
            echo $gender;
			if (!empty($uname)&&!empty($pass)&&!empty($repass))
			{
				if($pass != $repass)
				{
					echo '<p style = "color:red">passwords dont match';
				}
				else
				{
					$sql =  "SELECT * FROM `users` WHERE name='$uname'";
					$query_run = mysql_query($sql);

					if ( mysql_num_rows($query_run) == 1)
					{
						echo '<p style = "color:red">username is already registered';
					}
					else
					{
						
						$query = "INSERT INTO `users` VALUES ('','".mysql_real_escape_string($cusname)."','".mysql_real_escape_string($age)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($phnum)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($uname)."','".mysql_real_escape_string($passhash)."')";
							if ($query_run = mysql_query($query))
							{
								header("location:login.php");

							}
							else
							{
								echo "sorry failed!try again later ";
							}
					}

				}

			}
			else
			{
				echo '<p style = "color:red">please fill in all fields';
			}
		}


	}





?>

                        		</div>
                        		
                            </div>
                           <div class="form-bottom">
                                <form role="form" action=" " method="post" class="registration-form" id="f1">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="cusname" value="<?php if(isset($cusname)){ echo $cusname;}?>" placeholder=" name..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-age">age</label>
                                        <input type="text" name="age" value="<?php if(isset($age)){ echo $age;}?>" placeholder="Age..." class="form-age form-control" id="form-last-name"required >
                                    </div>
                                    <div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="gender" value="male" aria-label="..."  required autofocus>
      </span>
      <input type="text" class="form-control"  aria-label="..."placeholder="Male">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="gender" value="female"aria-label="..." required >
      </span>
      <input type="text" class="form-control" aria-label="..."placeholder="female">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

                                    <div class="form-group">
                                        <label class="sr-only" for="form-phonenumber">ph.no</label>
                                        <input type="text" name="phnum" value="<?php if(isset($phnum)){ echo $phnum;}?>"placeholder="ph.no" class="form-phonenumber form-control" id="form-email"required autofocus >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="email" name="email"value="<?php if(isset($email)){ echo $email;}?>" placeholder="Email..." class="form-email form-control" id="form-email"required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="uname" placeholder="Username..." class="form-email form-control" id="form-email"required autofocus>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                    </div>
        
                                    
                                     <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="repass" placeholder="Password again..." class="form-password form-control" id="form-password" required>
                                    </div>
                                        <button type="submit" class="btn">sign me up!</button>
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