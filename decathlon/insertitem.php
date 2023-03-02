<?php  
$itemid=$_GET['itemid'];
$quantity=$_GET['quantity'];
$checkoutid=$_GET['checkoutid'];
//echo $tid."<br>".$cid;
$mysqli = new mysqli('localhost','root','','decathlon');
$insert_row = $mysqli->("INSERT INTO checkout action (itemid,quantity,checkoutid) VALUES($itemid, $quantity, $checkoutid)");

?>