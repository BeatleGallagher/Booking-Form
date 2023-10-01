<?php


require('db_conn.php');

$query = "SELECT * FROM userbookings ORDER BY userid DESC limit 1";
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);
$row = $result->fetch_assoc();

$content = "Good day ". $row['username'] ."\n Your appointment is on: " . $row['userdate'] ."\n at ". $row['usertime'] . "\n for " . $row['userquantity']. " people " . "\n as ". $row['userreason'];


//Set the HTTP headers for downloading
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="booking details.txt";');

//Output the file content
echo $content;





