<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if(strlen($_SESSION['cuid']==0)) {
header('location:login.php');
}else{


//select office name
$userid=$_SESSION['cuid'];
$sql=mysqli_query($con,"select * from tbl_courier_officers where cuid='$userid'");
$row=mysqli_fetch_array($sql);
$office=$row['office'];
//echo $office;

$query=mysqli_query($con,"select * from tbl_courier where status='Delivered' and cuid=$userid ORDER BY cid DESC");
//echo $office;
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
                    <a href="search.php">Search</a>
                </li>
                <li>
                    <a class="active" href="delivered.php">Delivered</a>
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
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Delivered Courier</h1>
                <p></p>
                <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Click to Get Menu</a>
            </div>
<?php 
include 'dbcon.php';
$sql = $conn ->prepare("SELECT COUNT(cid) as m FROM tbl_courier WHERE status ='Delivered'  and cuid=$userid");
                                           $sql -> execute();
                                           $count = $sql->fetchAll(); 
                                           foreach ($count as $field);
                                           ?>			
			<div class="col-md-9">
					<div class="panel panel-default">
					  <div class="panel-heading main-color-bg">
						<h3 class="panel-title">Delivered Courier [<?php echo $field['m'];?>]</h3>
					  </div>
					  	<div class="panel-body">
							<div class="row">
							
						</div><!--end of row-->
						
						<!-- Table -->
						  <table class="table table-striped table-hover" style="margin-top:18px;">
							<tr>
								<td>Consignment No</td>
								<td>Shipper</td>
								<td>Receiver</td>
								<td>Pickup Date/Time</td>
								<td>Status</td>
								<td></td>
							</tr>
	
							<?php while($result=mysqli_fetch_array($query)){
							$cid=$result['cid'];
							?>	

							<tr>
								<td><?php echo $result['cons_no']; ?></td>
								<td><?php echo $result['ship_name']; ?></td>
								<td><?php echo $result['rev_name']; ?></td>
								<td><?php echo $result['pick_date']; ?> - <?php echo $result['pick_time']; ?></td>
								<td><?php echo $result['status']; ?></td>
								<td></td>
							</tr>
							 <?php
							}//while
							?>
						  </table>
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