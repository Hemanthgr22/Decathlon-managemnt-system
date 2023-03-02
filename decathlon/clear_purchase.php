<?php  


$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("DELETE from `checkout action`");
?>
<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("customers_details.jpg");
    }
    </style>
	<title>Checkout Details</title>
	<link rel="stylesheet" type="text/css" href="custdetstyle.css">
</head>
<body>
<form action="cust_opt.php">
		<input type="submit" name="submit" value="<< Go Back">
</form>
<p>
	<h1 id="lab1">THE BASKET IS CLEARED!!!</h1>
		
</p>
</center>
	</body>
</html>