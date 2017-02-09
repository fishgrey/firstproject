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

    <title>Evergreen Bookstore Inventory Management ---Report Review</title>

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
                    <li>
                        <a href="index1.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="inventory1.php"><i class="fa fa-fw fa-bar-chart-o"></i> Inventory</a>
                    </li>
                    <li>
                        <a href="sales1.php"><i class="fa fa-fw fa-table"></i> Sales</a>
                    </li>
                    <li class="active">
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
                           Report <small>Sort By Price</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-edit"></i> Report
                            </li>
                            <li>
                            	<i class="fa fa-check"></i> Sales Report
                            </li>
                            <li class="active">
                            	<i class="fa fa-search"></i> Search Result
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             
                <!-- /.row -->

               
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
              <?php 
 
	  $quantity = $_GET['quantity'];
	  $quantity1 = $_GET['quantity1'];
	  $query = mysql_query("SELECT * FROM sales WHERE quantity BETWEEN '$quantity' AND '$quantity1' ORDER BY datetime ASC")or die(mysql_error());   ?>
                 <div class="row">
                    <div class="col-lg-12">
                    <div class="alert alert-info">
                    The books' price between<strong>RM <?php echo "{$quantity}" ?></strong> to <strong>RM <?php echo "{$quantity1}"?> </strong> .
                </div>
			<?php if(mysql_num_rows($query) > 0){ ?>
	<table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>SalesID</th>
                                        <th>BookID</th>
                                        <th>Book Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Sales</th>
                                        <th>Date & Time</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								  while($row = mysql_fetch_assoc($query)){?>
									  
                                    <tr>
                                        <td><?php echo "{$row['salesID']}"?></td>
                                        <td><?php echo "{$row['bookID']}"?></td>
										<td><?php echo "{$row['bookName']}"?></td>
                                        <td><?php echo "{$row['price']}"?></td>
                                        <td><?php echo "{$row['quantity']}"?></td>
                                        <td><?php echo "{$row['total_sales']}"?></td>
										<td><?php echo "{$row['datetime']}\n;"?></td>
                                        
                                    </tr> <?php 
								  }
								  }
								  else{ echo "No result.";
								  }
	  
								 
								  ?>
                                    
                                </tbody>
                            </table>
                            
                            <?php mysql_close($con);?>
                 </div>
             </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-lg-6">
               
                <p>
                    <a href="report3.php" class="btn btn-sm btn-info">Back</a>
                </p>
              
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
