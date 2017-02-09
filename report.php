<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evergreen Bookstore Inventory Management ---Sales</title>

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
                        </li>`
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
                           Report <small>Check Book Report</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-edit"></i> Report
                            </li>
                            <li class="active">
                            	<i class="fa fa-check"></i>Book Report
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                    <div class="col-lg-12">
                    <div class="alert alert-info">
                    <strong>Check Book Report!</strong> Click the following button to check report.
                    </div> 
                    <div class="col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h3 class="panel-title">Sort By Price of Book</h3>
                            </div>
                            <div class="panel-body">
                      <form class="form-inline" action="connection_searchfilter.php" method="GET">
                      <select class="form-control input-sm" name="price">
                      <option>0</option>
                      <option>50</option>
                      <option>100</option>
                      <option>200</option>
                      </select>
                      <label>To</label>
                      <select class="form-control input-sm" name="price1">
                      <option>49</option>
                      <option>99</option>
                      <option>199</option>
                      <option>400</option>
                      </select>
                      <input type="submit" name="submit" value="Filter" class="btn btn-sm btn-success">
                      </form>
                    		</div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h3 class="panel-title">Sort By Book Quantity</h3>
                            </div>
                            <div class="panel-body">
                      <form class="form-inline" action="connection_searchfilter1.php" method="GET">
                      <select class="form-control input-sm" name="book_quantity">
                      <option>0</option>
                      <option>6</option>
                      <option>11</option>
                      <option>15</option>
                      </select>
                      <label>To</label>
                      <select class="form-control input-sm" name="book_quantity1">
                      <option>5</option>
                      <option>10</option>
                      <option>15</option>
                      <option>30</option>
                      </select>
                      <input type="submit" name="submit" value="Filter" class="btn btn-sm btn-success">
                      		</div>
                        </div>
                    </div>
                      </form> 
                </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                      <div class="col-lg-1">
                      <p>
                      <a href="report0.php" class="btn btn-sm btn-info">Back</a>
                      </p>
                    </div>
                </div>
                <!-- /.row -->
				
             
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
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
</body>

</html>
