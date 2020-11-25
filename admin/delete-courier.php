<?php
session_start();
error_reporting(0);
include('dbconnection.php');
require_once('library.php');
if (strlen($_SESSION['cuid']==0)) {
header('location:login.php');
} else{
$cid=$_GET['cid'];
$query="DELETE FROM tbl_courier WHERE cid='$cid'";
$result = mysqli_query($con,$query);
if(!$result)
{
    die("<script>Coudln't be deleted</script>");
}else{
    header("Location: courier_list.php");
}

}

