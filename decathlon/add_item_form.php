<?php  
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT max(checkoutid) from `checkout action`");
$rows=$result->fetch_assoc();
$val=$rows['max(checkoutid)'];
$uid=$val+1;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add items in basket</title>
	<link rel="stylesheet" type="text/css" href="add_emp_style.css">
</head>
<style>
    body {
    background-image: url("maintenance_login_page.jpg");
    }
    </style>
<body>
	
	<div id="frm1">
		<form action="add_item.php" action="GET">
			<h3 id="hed1">Enter Details of Items</h3>
			<p>
				<label>Checkout ID:</label>
				<input type="number" name="id" value="<?php echo($uid) ?>">
			</p>
			<p>
				<label>Item Id:</label>
				<input type="number" name="itemid" required>
			</p>
			
			<p>
				<label>Quantity: </label>
				<input type="number" name="quantity" required>
			</p>
			<form action="add_item_form.php" action="GET">
			<p>
				<input type="submit" name="submit" value="Add item" id="sub1">
			</p>

		</form>
		<form action="book_or_status.php" action="GET">
<p>
				<input type="submit" name="submit" value="Go Back" id="sub1">
			</p>

	</div>

</body>
</html>