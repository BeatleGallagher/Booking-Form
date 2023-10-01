<?php

    require('db_conn.php');
    
            $query = "SELECT * FROM userbookings ORDER BY userid DESC limit 1";
            $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
            $row = $result->fetch_assoc();

            $useremail = $row['useremail']. ",cloudwebdesigns@yahoo.com"; 
            $username = $row['username'];
            $userdate = $row['userdate'];
            $usertime = $row['usertime'];
            $userquantity = $row['userquantity'];
            $userreason = $row['userreason'];

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            

            // send email
            mail($useremail,"Booking details:","Good day <b><i>". $username ."</i></b><br> Your appointment is on: <br><b><i>" . $userdate ."</b></i><br>\n at <br><b><i>". $usertime . "</b></i>\n<br> for <b><i>" . $userquantity. "</b></i> people" . "<br>\n as <b><i>". $userreason."</b></i>", $headers);
            header('location:home.php?success=true');
    
?>
