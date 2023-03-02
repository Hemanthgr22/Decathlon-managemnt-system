<?php

$empid=$_GET['empid'];
$password=$_GET['pass'];

echo "Login Error!!";
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from employee WHERE empid='$empid' AND password='$password'");
$row=$result->fetch_assoc();
if($row['empid'] == $empid && $row['password'] == $password)
{
	$status="succesful";
}

else{
	$status="failed";

} 
if($status=="succesful"){
	header("Location:manager_form.php");
}
else if($status=="failed"){
	echo "<script>
alert('Emplyee ID and Password doesnot Match!!! Try Again');
window.location.href='emp_page.php';
</script>";
}

//https://static1.squarespace.com/static/555591bbe4b02f3bc9fa87d4/t/55889263e4b0363097805b78/1435013732977/santa-monica-beach-at-night-wallpaper-frenzia-night-beach-wallpaper-download-with-moon-wallpapers-for-desktop-fb-facebook-1920x1080-of-new-york-city-iphone-5.jpg?format=1500w

?>
