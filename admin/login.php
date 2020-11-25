<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if(isset($_POST['login']))
  {
    $username=$_POST['txtusername'];
    $password=($_POST['txtpassword']);
    $query=mysqli_query($con,"select cuid,office,officer_name,off_pwd from tbl_courier_officers where officer_name='$username' && off_pwd='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){

      $_SESSION['login']=$_POST['txtusername'];
      $_SESSION['cuid']=$ret['cuid'];

     header('location:index.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Login</title>
	
 	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
	<script language="javascript">
	<!--
	function memloginvalidate()
	{
	   if(document.form1.txtusername.value == "")
		 {
			alert("Please Enter Admin UserName.");
			document.form1.txtusername.focus();
			return false;
		 }
	  	 if(document.form1.txtpassword.value == "")
		 {
			alert("Please Enter Admin Password.");
			document.form1.txtpassword.focus();
			return false;
		 }
		 if(document.form1.OfficeName.value == "Select Your Office Address")
		 {
			alert("Please Enter Office Address.");
			document.form1.OfficeName.focus();
			return false;
		 }
	   }
	
	//-->
	</script>
</head>

<body>
<div class="side-item">
<div class="container">
		<div class="col-lg-12">
	<form name="form1" id="form1" method="post" class="form-horizontal" onSubmit="return memloginvalidate()">
	<div class="logo">
		<a href="../index.php"><h1>COU</h1></a>
	</div>
	<div class="form-group">
		<i class="glyphicon glyphicon-user"></i>
		<input type="text" name="txtusername" class="form-control" placeholder="Enter your Username">
	</div><!-- End of form-group -->
	<div class="form-group">
		<i class="glyphicon glyphicon-lock"></i>
		<input type="password" name="txtpassword" class="form-control" placeholder="Enter your Password">
	</div><!-- End of form-group -->
	
	<div class="form-group">
	<input type="submit" value="Login" name="login" class="btn btn-info btn-block">
	
	  <P style="text-align:center; color:#FF0000; margin-top:20px; font-size:14px;"><?php echo $error; ?></P>
	
	</div><!-- End of col-md-4 -->
	</form>
		</div><!-- End of container -->
</div><!-- End of container -->

</body>
</html>
