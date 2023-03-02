<?php
$empid=$_GET['cid'];
$password=$_GET['password'];

echo "Login Error!!";
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from customer WHERE custid='$empid' AND Password='$password'");
$row=$result->fetch_assoc();
if($row['custid'] == $empid && $row['Password'] == $password)
{
	$status="succesful";
	
}
else{
	$status="failed";

} 
if($status=="succesful"){
	header("Location:cust_opt.php");
}
else if($status=="failed"){
	echo "<script>
alert('Customer ID and Password doesnot Match!!! Try Again');
window.location.href='customer_page.php';
</script>";
}



?>
