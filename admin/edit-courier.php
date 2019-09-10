<?php
session_start();
error_reporting(0);
include('dbconnection.php');
require_once('library.php');
if (strlen($_SESSION['cuid']==0)) {
header('location:login.php');
} else{
$cid=$_GET['cid'];
echo $cid;
$userid=$_SESSION['cuid'];
$query=mysqli_query($con,"select * from tbl_courier where cid='$cid'");
//$result=mysqli_fetch_array($query);
//$office=$result['office'];
//echo $office;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Shipment  &nbsp; &nbsp;&rarr;<a href="courier_list.php">Back to Courier List</a></strong></td>

    </tr>

  </tbody></table>



  <br>
							<?php while($result=mysqli_fetch_array($query)){
							$cid=$result['cid'];
							?>
  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name : </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $result['ship_name']; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $result['phone']; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
			<?php echo $result['s_add']; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $result['rev_name']; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
			<?php echo $result['r_phone']; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
			<?php echo $result['r_add']; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment No  : </td> 

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $result['cons_no']; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $result['type']; ?>&nbsp;</td>
    </tr>
    
    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $result['book_mode']; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Total freight : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $result['Totalfreight']; ?>&nbsp;Rwf.</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $result['mode']; ?></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $result['pick_date']; ?> -<span class="gentxt">
		<?php echo $result['pick_time']; ?>
        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $result['status']; ?></td> 
    </tr> 

     

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $result['comments']; ?></td> 
    </tr> 
  </tbody></table> 

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

<form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

    <tbody><tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>

    <tr>

      <!--<td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">New Location:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

        <select name="OfficeName" class="form-control">
			
	</select>
	</td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">New Status: </td>

      <td class="Partext1" bgcolor="#FFFFFF" width="26%">

	  






<!--<select name="status">

<option value="In Transit">In Transit</option>

<option value="Landed">Landed</option>

<option value="Delayed">Delayed</option>

<option value="Completed">Completed</option>
<option value="Onhold">Onhold</option>
</select>

<br></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="58%"><div align="center">
	 
	  </td>
    </tr>-->

    <!--<tr>

      <td bgcolor="#FFFFFF" align="right"><span class="Partext1">Comments:</span></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
	  <textarea name="comments" cols="40" rows="3" id="comments" class="form-control"></textarea></td>
    </tr>-->

    

    <!--<tr>

      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

       <input name="submit" value="Submit" type="submit" class="btn btn-info">

          <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

          <input name="cons_no" id="cons_no" value="<?php echo $result['cons_no']; ?>" type="hidden">      </td>
	
    </tr>-->

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form>    </td>
  
 <tr>

 <td colspan="2" bgcolor="#FFFFFF" align="right"><div align="center">
 <?php
	  include'dbcon.php';
	
          $sql = $conn->prepare("SELECT * FROM tbl_courier WHERE cid='$cid'");
          $sql->execute();
          $rem=$sql->fetchAll();
          foreach ($rem as $row);
          $office=$row['office'];

	  ?>
	  <form method="POST" action="notifications.php">
      <input class="form-control" type="hidden" name="cid" value="<?php echo $row['cid']; ?>">    
	  <input class="form-control" type="hidden" name="recipient" value="<?php echo $row['ship_name']; ?>">
      <input class="form-control" type="hidden" name="msg" value="Courier yanyu mwohereje ubu wageze kuwo mwayoherereje">
	  <button class="btn btn-danger" type="submit" name="send"><i class="fa fa-fw fa-edit"></i> <i>Marked this shipment as to be DELIVERED</i> </button></br></br>
	  </form>
  </td>
  </tr>
  <tr style="margin-top:10px;">

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>
<?php }?>





</body></html>
<?php } 
?>