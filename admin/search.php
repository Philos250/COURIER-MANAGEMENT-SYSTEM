<?php 
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['cuid']==0)) {
header('location:login.php');
} else{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Courier System
                    </a>
                </li>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li>
                    <a href="add_courier.php">Add Courier</a>
                </li>
                <li>
                    <a href="courier_list.php">Update Courier</a>
                </li>
                <li>
                    <a class="active" href="search.php">Search</a>
                </li>
                <li>
                    <a href="delivered.php">Delivered</a>
                </li>
                <li>
                    <a href="datewise.php">Datewise</a>
                </li>
                <li>
                    <a href="process.php?action=logOut">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Search Courier</h1>
                <p></p>
                <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Click to Get Menu</a>
            </div>
			
			<div class="col-md-9">
					<div class="panel panel-default">
					  <div class="panel-heading main-color-bg">
						<h3 class="panel-title">Search Courier</h3>
					  </div>
					  	<div class="panel-body">
							<div class="row">
							<div class="col-md-9">
							<form action="search-courier.php" method="post">
								<input name="Consignment" class="form-control input-type-space" type="text" placeholder="Type to Search Courier......">
							</div><!--end of col-->
							<div class="col-md-3">
								<input type="submit" value="Search Courier" class="btn btn-info">
							</form>
							</div><!--end of col-->
						</div><!--end of row-->
						
							</div>
						</div>
					</div>
					
					</div>
				</div><!--End of col-md-3-->

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>
<?php }?>