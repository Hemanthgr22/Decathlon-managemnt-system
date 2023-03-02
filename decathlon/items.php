<?php  
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT max(checkout_id) from `checkout action`");
$rows=$result->fetch_assoc();
$val=$rows['max(checkout_id)'];
$uid=$val+1;
?>

<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("customers_details.jpg");
    }
    </style>
	<title>Items</title>
	<link rel="stylesheet" type="text/css" href="custdetstyle.css">
</head>
<body>

<p>
	<h1 id="lab1">Items Available</h1>
		
</p>
	
<?php
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from items");
echo "<table border=5 width=1335 cellpadding=15 bgcolor=#D9D9FF> 
<tr>
<th>Item ID</th>
<th>Brand</th>
<th>Description</th>
<th>MRP</th>

</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['itemid']."</td>";
		echo "<td>".$rows['brand']."</td>";
		echo "<td>".$rows['description']."</td>";
		echo "<td>".$rows['MRP']."</td>";
		
		echo "</tr>";
	}
	echo "</table>";

?>

	
	<div id="frm1">
		<form action="add_item.php" action="GET">
			<h3 id="hed1">Enter Item ID to add in basket</h3>
			<p>
				<label>Checkout ID:</label>
				<input type="number" name="id" value="<?php echo($uid) ?>">
			</p>
			<p>
				<label>Item Id:</label>
				<input type="number" name="itemid" required>
			</p>
			
			
				<input type="submit" name="submit" value="Add item" id="sub1">
			</p>

		</form>
		<form action="checkout_details.php" action="GET">
<p>
				<input type="submit" name="submit" value="Check basket" id="sub1">
			</p>
			<form action="cust_opt.php" action="POST">
<p>
				<input type="submit" name="submit" value="GO BACK" id="sub1">
			</p>

	</div>

</body>


	</body>
</html>