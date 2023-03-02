<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("first_page.jpg");
    }
    </style>
	<title> First Page </title>
	<link rel="stylesheet" type="text/css" href="teststyle.css">
</head>
<body >
	    <p>
	    	<center>
				<h1 id="label1">DECATHLON </h1>
		</center></p>
		<p>
				<h3 id="label2">CHOOSE OPTION</h3>
		</p>
	
	<div id='frm2'>
		<form action="customer_page.php" method="POST">
			<p>
				<h4 id="label3">To Enter as a customer</h4>
		</p>
			<p>
				<input type="submit"  value="Customer" />
			</p>
			
		</form>
	</div>

	<div id='frm2'>
		<p>
				<h4 id="label3">To Enter as an Manager</h4>
		</p>

		<form action="emp_page.php" method="POST">
			<p>
				<input type="submit"  value="Employee" />
			</p>
			
		</form>
	</div>

	
</body>
</html>