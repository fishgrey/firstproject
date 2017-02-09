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
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

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
                                <a href="profile1.php">View Profile</a>
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
                           Inventory <small>Add Products</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Inventory
                            </li>
                            <li class="active">
                            	<i class="fa fa-plus"></i> Create New Products
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

             
                <!-- /.row -->

               
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-6">
                <form role="form" method="POST" action="connection_product.php">
                <div class="form-group">
                                <label>BookID</label>
                                <input class="form-control" name="bookID">
                                 <label>BookName</label>
                                <input class="form-control" name="bookName">
                                <label>Author</label>
                                <input class="form-control" name="author">
                                 <label>Price</label>
                                <input class="form-control" name="price">
                                <label>Quantity</label>
                               <select class="form-control" name="book_quantity">
                               		<option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    
                                </select>
                                
                          <p>  
                          <input id="button" class="btn btn-sm btn-success" type="submit" name="submit" value="Add">
                          <a href="inventory.php" class="btn btn-sm btn-info"> Back </a>
                </p>     
                </div>
                </form>

                
                </div>
                    </div>
                <!-- /.row -->

                <div class="row">
                    
                        <h2>Book</h2>
                        <div class="table-responsive">
                    
<?php 

	      define('DB_HOST', 'localhost'); 
		  define('DB_NAME', 'inventory'); 
		  define('DB_USER','root'); 
		  define('DB_PASSWORD',''); 


$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 	  
	  $query = mysql_query("SELECT * FROM book ORDER BY datetime ASC") or die(mysql_error());?>



                           <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>BookID</th>
                                        <th>BookName</th>
                                        <th>Author</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
								  while($row = mysql_fetch_assoc($query)){?>
									  
                                    <tr>
                                        <td><?php echo"{$row['bookID']}"?></td>
                                        <td><?php echo "{$row['bookName']}"?></td>
										<td><?php echo "{$row['author']}"?></td>
                                        <td><?php echo "{$row['price']}"?></td>
                                        <td><?php echo "{$row['book_quantity']}"?></td>
										<td><?php echo "{$row['datetime']}\n;"?></td>
                                        <td>
                                        <form action="updateproduct.php" method="GET">
                                        <input type="hidden" name="bookID" value="<?php echo $row['bookID'];?>">
                                        <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Edit"></form></td>
                                        <td>
                                        <form action="connection_deleteproduct.php"  method="POST">
                                        <input type="hidden" name="bookID" value="<?php echo $row['bookID'];?>">
                                        <input type="submit" name="submit" class="btn btn-sm btn-danger" value="Delete" onclick="return confirm('Are you sure?')"></form>
                                        
                                       
                                        </td>
                                        
                                    </tr> <?php
								  }
								  ?>
                                    
                                </tbody>
                             
                            </table>
                            
                            <?php mysql_close($con);?>
                        </div>
             </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
