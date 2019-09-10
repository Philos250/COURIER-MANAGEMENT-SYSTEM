<?php
include'dbcon.php';
if(isset($_POST['send'])){
$message=$_POST['msg'];

	$userID = $_POST['cuid'];
	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	
	$drivername = $_POST['dname'];
	$plaque = $_POST['plaque'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	//$Weight = $_POST['Weight'];
	//$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];

	$Bookingmode = $_POST['Bookingmode'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	$office = $_POST['office'];
	
	$Packupdate = $_POST['Packupdate'];
	$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$Comments = $_POST['Comments'];
//Query for inserting data
$query = "INSERT INTO tbl_courier (cuid, cons_no, ship_name, phone, s_add, rev_name, r_phone, r_add, dname, plaque, type, qty, book_mode, Totalfreight, mode, office, pick_date, pick_time, status, comments, book_date )
VALUES('$userID','$ConsignmentNo', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername','$Receiverphone','$Receiveraddress', '$drivername', '$plaque', '$Shiptype', $Qnty, '$Bookingmode', '$Totalfreight', '$Mode', '$office', '$Packupdate', '$Pickuptime', '$status', '$Comments', NOW())";

if ($conn->query($query )) {

              $data = array(    
              "sender"=>"+250726259177",
              "recipients"=>$Receiverphone,
              "message"=>"Mwiriwe Neza, Kuri ".$Receivername.", ".$message." ".$office." irabageraho saa ".$Pickuptime.", Courier Code yawe ni:".$ConsignmentNo.", Courier izanywe na ".$drivername.",uvuye kuri ".$Shippername." Murakoze, Umunsi mwiza!",
            );

            $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
            
            $data = http_build_query ($data);

            $username="pasteur"; 
            $password="0726259177";
            
            //open connection
            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
            curl_setopt($ch,CURLOPT_POST,true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

            //execute post
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            //close connection
            curl_close($ch);
            
			echo"<script>alert('The Notification Has Been Sent');window.location='courier_list.php'</script>";
	}else{
		echo "<script type= 'text/javascript'>alert('Courier Not Updated.');window.location=\'courier_list.php\'</script>";
	} 
}
?>