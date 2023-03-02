<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("emp_login.jpg");
    }
    </style>
	<title>Employee Login Page</title>
		<link rel="stylesheet" type="text/css" href="logstyle.css">
</head>
<body>
	<div id='frm2'>
		<form action="emp_verify.php" method="GET">

		<form>
			<p>
				<h2 id="lab3">ENTER   EMPLOYEE   LOGIN   DETAILS</h2>
			</p>
			<p>
				<label id="lab1">Employee Id:</label>
				<input type="text" id="empid" name="empid" required placeholder="Employee ID" />
			</p>
			<p>
				<label id="lab2">Password:</label>
				<input type="password" id="pass" name="pass" required placeholder="password" />
			</p>
			<p>
				<input type="submit" id="btn2" value="LOGIN" />
			</p>
		</form>
	</div>

</body>
</html>