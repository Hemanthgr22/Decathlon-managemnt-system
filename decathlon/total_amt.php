<?php
		    		$mysqli = new mysqli('localhost','root','','decathlon');
                    $result = $mysqli->query("CALL `total_amount`();");
                    $rows=$result->fetch_assoc();
                    $val=$rows['total'];
                    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Amount</title>
	<link rel="stylesheet" type="text/css" href="total.css">
</head>
<style>
    body {
    background-image: url("maintenance_login_page.jpg");
    }
    </style>
<body>
	<div id="tab1">
		<form action="maintenance_form.php" method="POST">
			<?php
	echo "<table border=5 width=150 cellpadding=15 bgcolor=white > 
    <tr>
    <th>Total Amount</th>
    </tr>";

	
		echo "<tr>";
		echo "<td>".$val."</td>";
		echo "</tr>";
	
	echo "</table>";  
	?>
	<br /><br />
	<input type="submit" name="submit" value="OK" id="btn3">
		</form>
		
		
	</div>
	


</body>
</html>