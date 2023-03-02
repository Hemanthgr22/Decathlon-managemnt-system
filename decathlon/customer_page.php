<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("customer_login.jpg");
    }
    </style>
	<title>Customer Login Page</title>
		<link rel="stylesheet" type="text/css" href="emp_login_style.css">
</head>
<body>
	<div id='frm2'>
		<form action="verify.php" method="GET">

		<form>
			<p>
				<h2 id="lab2">ENTER   CUSTOMER   LOGIN   DETAILS</h2>
			</p>
			<p>
				<label id="lab1">Customer Id:</label>
				<input type="text" id="empid" name="cid" required >
			</p>
			<p>
				<label id="lab3">Password:</label>
				<input type="password" id="password" name="password">
			</p>
	
			<p>
				<input type="submit" id="btn2" value="LOGIN" >
			</p>

		</form>
		<p>
				<a href="signup_form.php" id="l1">New User?...Sign in</a>
			</p>
	</div>

</body>
</html>

