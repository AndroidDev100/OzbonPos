<?php
session_start();
if (isset($_SESSION['email']) AND isset($_SESSION['user_type']) AND isset($_SESSION['key']) )
	echo " ";
else {
	header("location:index.php");

}

include ('db_connect.php');

$id=$_GET['id'];

$delete=mysqli_query($con,"DELETE FROM customers  WHERE customer_id='$id'");

if($delete)
{
	echo "<script>alert('Customer Deleted!')</script>";
	echo "<script>window.open('customers.php','_self')</script>";
}

else
{
	echo "<script>alert('Failed!')</script>";
	echo "<script>window.open('customers.php','_self')</script>";
}


?>
