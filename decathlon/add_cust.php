<?php  
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$pass=$_GET['pass'];

//echo $id.$name.$dept.$city.$sal.$dobt.$pass;

$con1 = MySQLi_connect('localhost','root','');
$db1=MySQLi_select_db($con1, 'decathlon');
$sql1="INSERT INTO `customer` (`custid`, `name`, `Password`, `phone`, `email`) VALUES ('$id', '$name', '$pass', '$phone', '$email');";
$record1=MySQLi_query($con1,$sql1);
$status="inserted";
if ($status=="inserted") {
	header("Location:customer_page.php");
	# code...
}
?>