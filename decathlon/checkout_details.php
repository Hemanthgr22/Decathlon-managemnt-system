<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("checkout_details.jpg");
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
	<h1 id="lab1">Checkout details</h1>
		
</p>
	
<?php
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from `checkout action` INNER JOIN `items` using(itemid)");
echo "<table border=5 width=1335 cellpadding=15 bgcolor=#D9D9FF> 
<tr>

<th>Checkout id</th>
<th>Item id</th>
<th>Item description</th>
<th>MRP</th>

</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['checkout_id']."</td>";
		echo "<td>".$rows['itemid']."</td>";
		echo "<td>".$rows['description']."</td>";
		echo "<td>".$rows['MRP']."</td>";
		
		echo "</tr>";
	}
	echo "</table>";

?>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="add_emp_style.css">
</head>

	
	<div id="frm1">
		
			<h3 id="hed1">Generate total amount</h3>
			<form action="invoice.php" action="GET">
<p>
				<input type="submit" name="submit" value="SUBTOTAL" id="sub1">
			</p>

	</body>
</html>