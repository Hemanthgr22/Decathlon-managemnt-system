<?php  
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT max(empid) from employee");
$rows=$result->fetch_assoc();
$val=$rows['max(empid)'];
$uid=$val+1;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add A New Employee</title>
	<link rel="stylesheet" type="text/css" href="add_emp_style.css">
</head>
<style>
    body {
    background-image: url("maintenance_login_page.jpg");
    }
    </style>
<body>
	
	<div id="frm1">
		<form action="add_emp.php" action="GET">
			<h3 id="hed1">Enter Details of New Employee</h3>
			<p>
				<label>Employee ID:</label>
				<input type="number" name="id" value="<?php echo($uid) ?>">
			</p>
			<p>
				<label>Name:</label>
				<input type="text" name="name" required>
			</p>
			
			<p>
				<label>City: </label>
				<input type="city" name="city" required>
			</p>
			<p>
				<label>Salary:</label>
				<input type="number" name="salary" required>
			</p>
			<p>
				<label>Phone:</label>
				<input type="number" name="phone" required>
			</p>
			<p>
				<label>Set Password:</label>
				<input type="password" name="pass" required>
			</p>
			<p>
				<input type="submit" name="submit" value="Add Employee" id="sub1">
			</p>

		</form>
	</div>

</body>
</html>