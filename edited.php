<?php
    require('db_conn.php');
    require('functions.php');   
    require('email.php');

$query = "SELECT * FROM userbookings ORDER BY userid DESC limit 1";
    $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
    $row = $result->fetch_assoc();

   if(isset($_GET['submitEdit'])){
  
    $name = clean($_GET['name']);
    $email = clean($_GET['email']);
    $number = clean($_GET['number']);
    $date = clean($_GET['date']);
    $time = clean($_GET['time']);
    $people = clean($_GET['people']);
    $services = clean($_GET['services']);
    $userid = clean($_GET['userid']);

        $query = "UPDATE userbookings SET username='$name',useremail='$email',usercontact='$number',userdate='$date',usertime='$time',userquantity='$people',userreason='$services' WHERE userid='$userid'";

        $result = $mysqli->query($query,MYSQLI_STORE_RESULT);


        header('location:email.php?success='. true);


}
?>