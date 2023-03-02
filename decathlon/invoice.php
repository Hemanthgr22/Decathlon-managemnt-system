<?php
		    		$mysqli = new mysqli('localhost','root','','decathlon');
                    $result = $mysqli->query("CALL `total_amount`();");
                    $rows=$result->fetch_assoc();
                    $val=$rows['SUM(MRP)'];
                    echo "<table border=6 width=500 cellpadding=15>
    <tr>
    <th>Total Amount</th>
    </tr>";

	
		echo "<tr>";
		echo "<td>".$val."</td>";
		echo "</tr>";
	
	echo "</table>"; 
                    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Amount</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<form action="checkout.html" method="POST">
		<div class="header">
		<h2></h2>
</div>
		
	
		<div class="input-group" >
				<button type="buy"  action="checkout.html" name="buy"  class="btn">BUY</button>

		</div>
	</form>
</html>