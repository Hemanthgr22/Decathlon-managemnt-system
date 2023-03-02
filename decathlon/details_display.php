<!DOCTYPE html>
<html>
<head>
	<style>
    body {
    background-image: url("customers_details.jpg");
    }
    </style>
	<title>Display Tables</title>
	<link rel="stylesheet" type="text/css" href="custdetstyle.css">
</head>
<body>

</body>
</html>

<?php
$opt=$_GET['radio'];
if ($opt == 'Customerinfo') {
$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from customer");
echo "<table border=5 width=1000 cellpadding=15 bgcolor=#D9D9FF> 
<h1 id=lab>CUSTOMER DETAILS</h1>
<tr>
<th>Cust ID</th>
<th>Name </th>
<th>Phone</th>
<th>Email</th>
<th>Account Created date</th>

</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['custid']."</td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['phone']."</td>";
		echo "<td>".$rows['email']."</td>";
		echo "<td>".$rows['datecreated']."</td>";
		
		echo "</tr>";
	}
	echo "</table>";
 }
else if($opt == 'customerpurchase'){
 	$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from checkout");
echo "<table border=5 width=1000 cellpadding=15 bgcolor=#D9D9FF> 
<h1 id=lab>PURCHASE DETAILS</h1>
<tr>
<th>Customer ID</th>
<th>Date</th>
<th>Subtotal</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		
		echo "<td>".$rows['custid']."</td>";
		//echo "<td>".$rows['empid']."</td>";
		echo "<td>".$rows['date']."</td>";
		echo "<td>".$rows['subtotal']."</td>";
		echo "</tr>";
	}
	echo "</table>";
 
 	
}



  else if($opt == 'employee'){
 	$mysqli = new mysqli('localhost','root','','decathlon');
$result = $mysqli->query("SELECT * from `employee`");
echo "<table border=5 width=1000 cellpadding=15 bgcolor=#D9D9FF>
<h1 id=lab>Employee Details</h1> 
<tr>
<th>ID</th>
<th>Name</th>
<th>City</th>
<th>Salary</th>
<th>Phone</th>
<th>Date of Join</th>
</tr>";
	while($rows=$result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$rows['empid']."</td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['address']."</td>";
		echo "<td>".$rows['pay']."</td>";
		echo "<td>".$rows['phone']."</td>";
		echo "<td>".$rows['datestart']."</td>";
		echo "</tr>";
	}
	echo "</table>";
 }



?>