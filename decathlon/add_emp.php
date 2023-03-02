<?php  
$id=$_GET['id'];
$name=$_GET['name'];
$city=$_GET['city'];
$sal=$_GET['salary'];
$phone=$_GET['phone'];
$pass=$_GET['pass'];

//echo $id.$name.$dept.$city.$sal.$dobt.$pass;

$con1 = MySQLi_connect('localhost','root','');
$db1=MySQLi_select_db($con1, 'decathlon');
$sql1="INSERT INTO `employee` (`empid`, `name`, `password`,`phone`, `pay`, `address`) VALUES ('$id', '$name', '$pass', '$phone', '$sal', '$city');";
$record1=MySQLi_query($con1,$sql1);
$status="inserted";
if ($status=="inserted") {
	header("Location:manager_form.php");
	# code...
}
?>