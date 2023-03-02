

<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("maintenance_form1.jpg");
    }
    </style>
	<title>Manitenance Form</title>
	<link rel="stylesheet" type="text/css" href="maintenancestyle.css">
</head>
<body>
	<a href="first_page.php" id="l2"> Logout</a>
	<a href="emp_page.php" id="l3">Switch User</a>
	<h3 id="log1">Login Succesful</h3>
	<?php 
    date_default_timezone_set('Asia/Kolkata'); 
    $dates=date("d/m/Y");
    echo "<br>";
    $time=date("h:i:sa");
    echo "Login Time: ".$time;
    echo"<br>";
    echo "Date: ".$dates;
    
    ?>
	
	<p>
				<h1 id="label1">MANAGER</h1>
		</p>
	<div id="frm4">
		<form action="details_display.php" method="GET">
			<p>
		    	<h4 id="lab5">CHOOSE OPTION
		    	<p>
		    	<input type="radio" name="radio" value="Customerinfo" checked> Customer Info<br>
                <input type="radio" name="radio" value="customerpurchase"> CustomerPurchase<br>
              
                <input type="radio" name="radio" value="employee"> EMPLOYEE<br>
                <a href="add_employee_form.php" id="l1">Add new Employee</a>
            </p>
            </h4>
		    </p>

		    <p>
				<input type="submit" id="btn3" value="Submit" >
			</p>

		</form>
		
		
		
		
		

		
	</div>

</body>
</html>