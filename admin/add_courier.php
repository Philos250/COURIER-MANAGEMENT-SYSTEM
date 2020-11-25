<?php 
session_start();
error_reporting(0);
include 'dbconnection.php';
require_once 'library.php';
$rand = get_rand_id(8);
if (strlen($_SESSION['cuid']==0)) {
header('location:login.php');
} else{

//echo $rand;
$userid=$_SESSION['cuid'];
$query=mysqli_query($con,"select * from tbl_courier_officers where cuid='$userid'");
$result=mysqli_fetch_array($query);
$office=$result['office'];
//echo $office;
?>
<!DOCTYPE html>
<html lang="en">
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<head>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	$("input").change(function(){
		var total=1;
		$("input[name=Qnty]").each(function(){
			total = total * parseInt($(this).val());
		})
		$("input[name=Totalfreight]").val(total);
	});
});
</script>

<style>
#hidden{}
</style>
<script type="text/javascript">
	function showHide(){
		var selectoption = document.getElementById("Shiptype");
		var hiddeninputs = document.getElementById("hidden");
		
		if(selectoption.value=="Money"){
			hiddeninputs.style.display="none";
		}else{
			hiddeninputs.style.display="block";
		}
	}
</script>
<script type="text/javascript">
	function showTime(){
		var selectoffice = document.getElementById("office").value;
		var ntime = document.getElementById("time").value;
		var howpickuptime = document.getElementById("pickuptime");
		
		var a=1;
		var b=3;
		var c=2;
		var result=0;
		if(selectoffice.value=="Fast Courier - Kigali"){
			howpickuptime=a.value + ntime.value;
			//document.form1.category.focus();
			return true;
		}
		if(selectoffice.value=="Fast Courier - Huye"){
			howpickuptime.value=b + ntime.val();
		}
		if(selectoffice.value=="Fast Courier - Musanze"){
			howpickuptime.value=c + ntime.val();
		}
	}
</script>

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
                    <a href="index.php">
                        Courier System
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a class="active"href="add_courier.php">Add Courier</a>
                </li>
                <li>
                    <a href="courier_list.php">Update Courier</a>
                </li>
                <li>
                    <a href="search.php">Search</a>
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
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Add Courier</h1>
                <p></p>
                <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Click to Get Menu</a>
				<a href="#" class="btn btn-info" style="margin-left:10px;">Add Courier</a>
            </div>
<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	// Make a date object.
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		// Make a row of that day!
		ds_echo (ds_template_day(i + 1, m, y));
		// This is not first loop anymore...
		first_loop = 0;
		// What is the next day?
		j ++;
		j %= 7;

	}
	// Do the footer
	ds_echo (ds_template_main_below());
	// And let's display..
	ds_ob_flush();
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
	ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year++;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	// Increase the current year.
	ds_c_year++;
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
	// 2 digits month.
	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	// 2 digits day.
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	// YYYY-MM-DD
	return d2 + '/' + m2 + '/'+ y;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
	// Hide the calendar.
	ds_hi();
	// Set the value of it, if we can.
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	// Maybe we want to set the HTML in it.
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	// I don't know how should we display it, just alert it to user.
	} else {
		alert (ds_format_date(d, m, y));
	}
}

function getSelected(opt)
 {
 
 	var opt=document.frmExport.opt;
            for (var intLoop = 0; intLoop < opt.length; intLoop++)
			 {
			  if (!(opt.options[intLoop].selected))
			   {
			   		alert("Select any one field!");
					return false;
               }
		    }
			return true;           
  }

// And here is the end.

// ]]> -->
</script>			
			<div class="col-md-9">
					<div class="panel panel-default">
					  <div class="panel-heading main-color-bg">
						<h3 class="panel-title">Shipper info</h3>
					  </div>
					  <div class="panel-body">
					  	<form action="senddata.php" method="post" name="frmShipment" > 
							<div class="form-group">
								<input name="cuid" type="hidden" class="form-control" id="inputPage" value="<?php echo $userid;?>" readonly="true">
							</div>
							<div class="form-group">
							  <label>Shipper Name</label>
								<input name="Shippername" type="text" class="form-control" id="inputPage" placeholder="Shipper Name" required>
							</div>
							<div class="form-group">
							  <label>Phone</label>
								<input name="Shipperphone" type="text" class="form-control" id="inputPage" placeholder=" Enter Phone Number" required maxlength="13">
							</div>
							<div class="form-group">
							  <label>Address</label>
								<input name="Shipperaddress" type="text" class="form-control" id="inputPage" placeholder="Enter Address" required>
							</div>
							
							 <div class="panel-heading main-color-bg">
								<h3 class="panel-title">Receiver info</h3>
							 </div>
							  
							<div class="form-group">
							  <label>Recevier Name</label>
								<input name="Receivername" type="text" class="form-control" id="inputPage" placeholder="Recevier Name" required>
							</div>
						
							<div class="form-group">
							  <label>Phone</label>
								<input name="Receiverphone" type="text" class="form-control" id="inputPage" placeholder="Enter Phone Number" required maxlength="13">
							</div>
							<div class="form-group">
							  <label>Address</label>
								<input name="Receiveraddress" type="text" class="form-control" id="inputPage" placeholder="Enter Address" required>
							</div>
							
							<div class="panel-heading main-color-bg">
								<h3 class="panel-title">Driver info</h3>
							 </div>
					  
							<div class="form-group">
							  <label>Driver Name</label>
								<input name="dname" type="text" class="form-control" id="inputPage" value="" required>
							</div>
							
							<div class="form-group">
							  <label>Car Plaque</label>
								<input name="plaque" type="text" class="form-control" id="inputPage" value="" required maxlength="7" required>
							</div>
							
							 <div class="panel-heading main-color-bg">
								<h3 class="panel-title">Shipment info</h3>
							 </div>
					  
							<div class="form-group">
							  <label>Consignment Number</label>
								<input name="ConsignmentNo" type="text" class="form-control" id="inputPage" value="<?php echo strtoupper($rand); ?>" readonly="true" maxlength="13" size="40">
							</div>
							<div class="form-group">
							<label>Type of shipment</label>
								<select id="Shiptype" class="form-control" name="Shiptype" onclick="showHide()">
								<option selected="selected" disabled="disabled">Select Category</option>
								<option value="Document">Document</option>
								<option value="Money">Money</option>
								<option value="Cloth">Cloth</option>
								<option value="Tool">Tool</option>
								<option value="Electronic device">Electronic device</option>
								<option value="Book">Book</option>
								<option value="Bag">Bag</option>
								<option value="Shoe">Shoe</option>
								<option value="Other">Other</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Unite Price OnDelivery</label>
								<input name="Qnty" type="text" class="form-control" id="num" value="" > 
							</div>

							<div class="form-group">
							  <label>Quantity</label>
								<input name="Qnty" type="text" class="form-control" id="hidden" placeholder="Enter Quantity" required maxlength="3">
							</div>
							<div class="form-group">
							  <label>Booking Mode</label>
								<select name="Bookingmode" id="category" class="form-control"> 
								<option selected="selected" disabled="disabled">Select Booking Mode</option>
								<option value="Paid">Paid</option>
								<option value="ToPay">ToPay</option>
								</select>
							</div>
							</div>
							<div class="form-group">
							  <label>Total Feight</label>
								<input name="Totalfreight" type="text" class="form-control" id="inputPage" placeholder="Total Weight" required maxlength="13" readonly="true">
							</div>
							<div class="form-group">
							  <label>Mode</label>
								<input name="Mode" type="text" class="form-control" id="inputPage" readonly="true" value="Road">

							</div>
	
							<div class="form-group">
							   <label>Destination Office</label>
								<select name="office" id="office" class="form-control" onclick="showTime()"> 
								<option selected="selected" disabled="disabled">Select Destination Office</option>
<?php						
$userid=$_SESSION['cuid'];
$sql=mysqli_query($con,"select office from tbl_courier_officers where office!='$office'");
while($result=mysqli_fetch_array($sql)){
$rows=$result['office'];
//echo $row;
echo "<option value='".$rows."'>".$rows."</option>";
}
?>
								</select>
							<div class="form-group">
							  <label>Pickup Date</label>
								<input name="Packupdate" type="date" id="Packupdate" class="form-control" style="cursor: text;"   placeholder="Enter Pick Date" required><span class="REDLink">*</span> 
							</div>
							<div class="form-group">
							  <label>Pickup Time (Now Time is: <?php echo date('H:i:s');?>)</label>
								<input name="time" type="hidden" class="form-control" id="time" placeholder="Enter Pick Time" value="<?php echo date('H:i:s');?>">
								<input name="Pickuptime" type="text" class="form-control" id="pickuptime" value="" placeholder="Enter Pickuptime" maxlength="8">
							</div>
							<div class="form-group">
							  <label>Status</label>
								<select name="status" id="category" class="form-control"> 
								<option value="in Transit">in Transit</option>
								</select>
							</div>
							<div class="form-group">
							  <label>Comment</label>
								<textarea name="Comments" class="form-control" id="inputPage" placeholder="Type comment here"></textarea>
								<input class="form-control" type="hidden" name="msg" value="Courier yanyu ubu iroherejwe kuri">
							</div>
							<input type="submit" class="btn btn-default" value="Submit Courier" name="send">
						</form>
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