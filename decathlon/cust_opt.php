
<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("book_or_status.jpg");

    }
    </style>
	<title>Customer Homepage</title>
	<link rel="stylesheet" type="text/css" href="bstyle.css">
</head>
<body>
	<?php 
    date_default_timezone_set('Asia/Kolkata'); 
    $dates=date("d/m/Y");
    echo "<br>";
    $time=date("h:i:sa");
    echo "Login Time: ".$time;
    echo"<br>";
    echo "Date: ".$dates;
    
    ?>
<h2 id="hed">Login Succesful</h2>

<h3 id='hd1'>Customer page</h3>	
	
	
	<div id='frm3'>
		<h3 id='hd1'>Choose Option</h3>
		
		
	
		<form action="items.php" method="GET">
		<form>
			
	        <p>	
				<input type="submit" id="btn2" value="Buy items">
			</p>
			
		</form>
	</form>

		<form action="checkout_details.php" method="POST">
		<form>
			
	        <p>	
				<input type="submit" id="btn2" value="Checkout Basket">
			</p>
			
		</form>
				<form action="clear_purchase.php" method="POST">
		<form>
			
	        <p>	
				<input type="submit" id="btn2" value="Clear Purchase">
			</p>
		</form>
	</form>
		
		<form action="first_page.php">
		<input type="submit" name="submit" id="btn3" value="Logout">
	</form>
		
	</div>
	
	

</body>
</html>