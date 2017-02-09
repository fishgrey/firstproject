<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
   
    mysql_select_db("inventory") or die(mysql_error());
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evergreen Bookstore Inventory Management ---Books</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Evergreen Bookstore Inventory Management</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                	<a href="loginpage.php" class="btn btn-sm btn-link"><i class="fa fa-sign-in"></i> Login</a>
                    <li><a href="registration.php" class="btn btn-sm btn-link">Signup</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="inventory.php"><i class="fa fa-fw fa-bar-chart-o"></i> Inventory</a>
                    </li>
                    <li>
                        <a href="sales.php"><i class="fa fa-fw fa-table"></i> Sales</a>
                    </li>
                    <li>
                        <a href="report0.php"><i class="fa fa-fw fa-edit"></i> Report</a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-gear"></i> Setting <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="loginpage.php">Login</a>
                            </li>
                            <li>
                                <a href="registration.php">SignUp</a>
                            </li>
                            <li>
                                <a href="profile.php">View Profile</a>
                            </li>
                        </ul>
                    </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Sales<small>Update Sales</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Sales
                            </li>
                        </ol>
                        <p><a href="sales.php" class="btn btn-sm btn-info">Back</a>
                        <a href="updatesales.php" class="btn btn-sm btn-primary">Update</a></p>
                    </div>
                </div>
                <!-- /.row -->

             
                <!-- /.row -->

               
                <!-- /.row -->
                 <?php
    $query = $_GET['salesID']; 
    $min_length = 2;
    if(strlen($query) >= $min_length){ 
        $query = htmlspecialchars($query);  
        $query = mysql_real_escape_string($query);
          $raw_results = mysql_query("SELECT * FROM sales
            WHERE (`salesID`LIKE '%".$query."%') OR (`bookName` LIKE '%".$query."%')") or die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){ ?>
         <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>SalesID</th>
                                        <th>BookID</th>
                                        <th>Book Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Date & Time</th>
                                        <th>Total Sales</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
           <?php while($results = mysql_fetch_assoc($raw_results)){
            echo "<tr>
                                        <td>{$results['salesID']}</td>
                                        <td>{$results['bookID']}</td>
										<td>{$results['bookName']}</td>
                                        <td>{$results['price']}</td>
                                        <td>{$results['quantity']}</td>
										<td>{$results['datetime']}</td>
                                        <td>{$results['total_sales']}</td>
                                    </tr>\n";
                
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
                <!-- /.row -->

                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>