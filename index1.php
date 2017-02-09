<?php 
include("securepage.php");
?>
<?php 
	      define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 


$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evergreen Bookstore Inventory Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

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
                	<a href="loginpage.php" class="btn btn-sm btn-link">Login</a>
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
                    <li class="active">
                        <a href="index1.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="inventory1.php"><i class="fa fa-fw fa-bar-chart-o"></i> Inventory</a>
                    </li>
                    <li>
                        <a href="sales1.php"><i class="fa fa-fw fa-table"></i> Sales</a>
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
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                          
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             
                <!-- /.row -->
                <?php $query= mysql_query("SELECT COUNT(bookID) AS qua FROM book WHERE book_quantity <=5 ") or die("Failed to connect to MySQL: " . mysql_error());
				mysql_select_db('inventory');
	  while ($row = mysql_fetch_array ($query)){?>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $row['qua'];?></div>
                                        <div>Restock Item!</div>
                                    </div><?php }?>
                                </div>
                            </div>
                            <a href="reportreview1.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php $query= mysql_query("SELECT SUM(total_sales) AS amt FROM sales ") or die("Failed to connect to MySQL: " . mysql_error());
				mysql_select_db('inventory');
	  while ($row = mysql_fetch_array ($query)){?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-dollar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $row['amt'];?></div>
                                        <div>Total Sales!</div>
                                    </div><?php }?>
                                </div>
                            </div>
                            <a href="reportreview.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php $query= mysql_query("SELECT SUM(book_quantity) AS tol FROM book ") or die("Failed to connect to MySQL: " . mysql_error());
				mysql_select_db('inventory');
	  while ($row = mysql_fetch_array ($query)){?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $row['tol'];?></div>
                                        <div>Book Remain!</div>
                                    </div><?php }?>
                                </div>
                            </div>
                            <a href="report2.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php $query= mysql_query("SELECT COUNT(salesID) AS tol FROM sales ") or die("Failed to connect to MySQL: " . mysql_error());
				mysql_select_db('inventory');
	  while ($row = mysql_fetch_array ($query)){?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $row['tol'];?></div>
                                        <div>Sales</div>
                                    </div><?php }?>
                                </div>
                            </div>
                            <a href="reportreview.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                	<div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Price of the Books</h3>
                            </div>
                            <div class="panel-body">
                        		<div id="line"></div>
                                <script>
                        $(document).ready(function(){
                        $.ajax({
                        url: 'connection_chart1.php', // getchart values
                        dataType: 'JSON',
                        type: 'POST',
                        data: {get_values: true},
                        success: function(response) {
                            var line = new Morris.Line({
                            element: 'line',
                            resize: true,
                            LineColors: ["#FF9900", "#990099", "#FF0000"],
                            xkey: 'y',
                            ykeys: ['a'],
                            labels: ['Book'],
                            data: response,
                            gridTextSize: '12',
                            gridTextColor: '#000000',
                            });
                        }
                        });
                        });
                        </script>
                        </div>
                    </div>        
                </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Monthly Sales</h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar"></div>
                                <script>
                        $(document).ready(function(){
                        $.ajax({
                        url: 'connection_chart.php', // getchart values
                        dataType: 'JSON',
                        type: 'POST',
                        data: {get_values: true},
                        success: function(response) {
                            var bar = new Morris.Bar({
                            element: 'bar',
                            resize: true,
                            BarColors: ["#FF9900", "#990099", "#FF0000"],
                            xkey: 'y',
                            ykeys: ['a'],
                            labels: ['Total sales'],
                            data: response,
                            gridTextSize: '12',
                            gridTextColor: '#000000',
                            });
                        }
                        });
                        });
                        </script>
                      </div>
                   </div>
                </div>
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

</body>

</html>
