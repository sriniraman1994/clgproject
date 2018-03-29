

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Get Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>

<body>

    <!-- Navigation -->
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
    $loginname;
    if (isset($_SESSION['admin_id']))
    {

        $id = $_SESSION['admin_id'];
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
                   
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
 
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Services
                    <small>version1</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-10">
                <h2 class="page-header">Services </h2>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                            
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                               


            </span>
                    </div>
                    <div class="panel-body">
                        <h4>Get Mechanic</h4>
                        <p>it is a service for getting mechanic onli.</p>
                        <a href="getmechanic.php" class="btn btn-primary">get</a>
                    </div>
                    
                </div>
            </div>
        <?php
                            $new=null;
                            $name=null;
                            require "conect2.inc.php";
                            $sql="select * from `addservice`";
                            if($result = mysql_query($sql)){

                                    while ($row = mysql_fetch_array($result))
                                    {
                                        
                                      $new = $row['icon'];
                                      $name = $row['service'];
                                       echo"<div class=\"col-md-6 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                               


            </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>{$row['service']}</h4>
                        <p>{$row['desc']}</p>
                        <a href=\"#\" class=\"btn btn-primary\">get</a>
                    </div>
                    
                </div>
            </div>"; 
                                      
                                    }

                            }
                            ?>
             
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Get Petrol</h4>
                        <p>it is a service for getting petrol online.</p>
                        <a href="getpetrol.php" class="btn btn-primary">get</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Service Tabs</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">

                    <li class=""><a href="#Get Mechanic" data-toggle="tab"><i class="fa fa-car"></i>Get Mechanic</a>
                    </li>
                    <li class=""><a href="#Get Petrol" data-toggle="tab"><i class="fa fa-support"></i>Get Petrol</a>
                    </li>
                    <?php
                            $new=null;
                            $name=null;
                            require "conect2.inc.php";
                            $sql="select * from `addservice`";
                            if($result = mysql_query($sql)){

                                    while ($row = mysql_fetch_array($result))
                                    {
                                        echo "<li class=\"\"><a href=\"#Get Petrol\" data-toggle=\"tab\"><i class=\"fa fa-support\"></i>{$row['service']}</a>
                    </li>";
                                    }
                                }
                    ?>
        

                </ul>
            </div>

            

                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade" id="Get Mechanic">
                        <h4>Get Mechanic</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>
                    <div class="tab-pane fade" id="Get Petrol">
                        <h4>Service Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                    </div>

                   

            </div>
        
</div>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                  <center>  <p>Copyright &copy; GetService2016</p> </center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/check.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.min.js"></script>


</body>

</html>
