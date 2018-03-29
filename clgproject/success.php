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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                require 'core.inc.php';
                require 'conect.inc.php';
    $loginname;
    if (isset($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $sql ="select cusname from `users` where id='$id'";
        if (mysql_query($sql))
            {
                $query_run = mysql_query($sql);
                if(mysql_num_rows($query_run))
                {
                    while($name = mysql_fetch_assoc($query_run))
                    {
                        $loginname = $name['cusname'];
                        echo ' <a class="navbar-brand" >Welcome  '. $loginname;
                    }

                }
            }
        }
        
     
?>
                     
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="logout.php">logout</a>
                    </li>
                    <li>
                        <a href="contact.php">Contactus</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="settings.html">settings </a>
                            </li>
                            <li>
                                <a href="help.html">help </a>
                            </li>
                            <li>
                                <a href="feedback.html">feedback</a>
                            </li>
                        </ul>
                    </li>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br/>
    <br/>
    <center><p style="color:green">Your request is successfully registered! </p></center><br/>
    <center><p style="color:green">You'll recieve a call shortly to confirm ur request!</p></center><br>
    <?php
    	$count =1;
    	$to = "mechanic@mymail.com";
    	$subject = "customer details";
    	$body = "customer name:bala location:ammapet ph:8124706168";
    	$headers = "from:onlinepaidserviesadmin@mymail.com";
    
    	 if (mail($to,$subject,$body,$headers))
    	 {
    	 	echo "Ur details are sent to mechanic <br>";
    	 	echo "u'll  recieve a call shortly from mechanic<br> ";
    	 	echo "u'll be charged rs.100/hour + materialcosts<br>";

    	 }
    	
    	

    ?>
    

   </body>

</html>


