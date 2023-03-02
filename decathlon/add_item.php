<?php  
$id=$_GET['id'];
$item=$_GET['itemid'];


$con1 = MySQLi_connect('localhost','root','');
$db1=MySQLi_select_db($con1, 'decathlon');
$sql1="INSERT INTO `checkout action` (`itemid`, `quantity`, `checkout_id`) VALUES ('$item', '$quantity', '$id');";
$record1=MySQLi_query($con1,$sql1);
$status="inserted";
if ($status=="inserted") {
	header("Location:items.php"); //redirecting back to items.php
		echo "<script>
alert('Item Inserted successfully');
window.location.href='items.php';
</script>";
}
	# code...
?>