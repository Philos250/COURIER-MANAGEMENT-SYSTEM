<?php
include'dbcon.php';
if(isset($_POST['send'])){
$cid=$_POST['cid'];
$recipient=$_POST['recipient'];
$message=$_POST['msg'];

//Query for updating requests data
$query = "UPDATE tbl_courier SET status='Delivered' WHERE cid='$cid'";
$sql = $conn->prepare("SELECT phone,ship_name,rev_name FROM tbl_courier WHERE ship_name='$recipient'");
          $sql->execute();
          $rem=$sql->fetchAll();
          foreach ($rem as $row);
            $telephone=$row['phone'];
            $fname=$row['ship_name'];
			$rev=$row['rev_name'];
if ($conn->query($query )) {
	 $data = array(    
              "sender"=>"+250726259177",
              "recipients"=>$telephone,
              "message"=>"Mwiriwe Neza, Kuri ".$fname.", ".$message.", ariwe ".$rev.", Murakoze, Ibihe byiza!",
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