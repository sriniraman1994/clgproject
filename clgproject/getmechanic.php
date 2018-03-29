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
                        <a href="#">Services</a>
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


        <!-- Top content -->
       
 
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Add services</h3>
                                <p>Enter service details</p>
                            



                              
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-key"></i>
                            </div>
                            </div>
                           <div class="form-bottom">
                                <form role="form" action=" " method="post" class="registration-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="uname"  placeholder=" name..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">phone</label>
                                        <input type="text" name="phone"  placeholder="phone" class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>


                                     <div class="form-group" >
                                    <label>state</label>
                                    <select class="form-control select2" style="width: 100%;" name="state"required autofocus>
                                    <option value="">state</option>
                                    <option value="tamilnadu">tamilnadu</option>
                                    <option value=""></option>
                                    </select>
                                    </div>
  
                                 <div class="form-group" >
                                    <label>district</label>
                                    <select class="form-control select2" style="width: 100%;" name="district"required autofocus>
                                    <option value="chennai">district</option>
                                    <option value="salem">salem</option>
                                    <option value="kovai">kovai</option>
                                    </select>
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="carname" placeholder=" carname..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="carno" placeholder=" carno..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>
                                   <div class="form-group">
                                        <label class="sr-only" for="form-first-name">name</label>
                                        <input type="text" name="carcolor" placeholder=" carcolor..." class="form-first-name form-control" id="form-first-name"required autofocus>
                                    </div>


                                  
                                    
                                <button type="submit" class="btn">get</button>
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
        
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
        <?php
                                    
require "conect.inc.php";
if(isset($_POST['uname'])&&isset($_POST['phone'])&&isset($_POST['state'])&&isset($_POST['district'])&&isset($_POST['carname'])&&isset($_POST['carno'])&&isset($_POST['carcolor'])){
$uname = $_POST['uname'];
$phone  = $_POST['phone'];
$state = $_POST['state'];
$district = $_POST['district'];
$carname = $_POST['carname'];
$carno = $_POST['carno'];
$carcolor = $_POST['carcolor'];

$sql = "INSERT INTO `account`.`userdetails`(`name`,`phno`,`state`,`district`,`carname`,`carno`,`carcolor`) VALUES ('$uname','$phone','$state','$district','$carname','$carno','$carcolor')";
if(mysql_query($sql)){

    $query = "select * from `admin`.`getmechanic` where state='$state' and district='$district'";
    if ($query_run = mysql_query($query)){
        echo "<B>The  available mechanic list:</b>";
    while ($row = mysql_fetch_array($query_run))
    {
        
        echo "<class=\"#showtable\">";
        echo "<center><table border=\"1\"><tr><td><b><a href=success.php>{$row['mechname']}</a></b></td></tr><tr><td>{$row['phno']}</tr></td><tr><td>{$row['address']}</td></tr></table></center>";
        echo "<br />";
    }
}
}


else {
    echo '<p style="color:red">try again later!</p>';
}
}
?>