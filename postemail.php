<?php $connection = mysql_connect("localhost","root","root"); if (!$connection) { die('Could not connect: ' . mysql_error()); }
mysql_select_db("forestandgoat", $connection);
$sql="INSERT INTO Subscribers (EmailAddress) VALUES ('$_POST[emailaddress]')";
if (!mysql_query($sql,$connection)) { die('Error: ' . mysql_error()); }
mysql_close($connection); 
$location = "http://localhost:8888/forestandgoat/index.html#modal";
header("Location:$location")
?>