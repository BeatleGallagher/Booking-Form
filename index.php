<html  lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book online form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="cloudweblogo10801080.png" type="image/x-icon">
    <script src="scripts.js"></script>
</head>
<body id="htmlTag">

        <div class="form-check form-switch">
            <input onClick="toggleDarkTheme()" class="form-check-input" type="checkbox" id="toggleSwitch">
            <label class="form-check-label" for="toggleSwitch">Dark Mode</label>
        </div>
  
</body>
</html>
    <div class="container">
    <?php 
    //session_start();
   
        require('db_conn.php');
        require('functions.php');

        if (isset($_GET['value'])) {
            echo "<h1 class='text-danger bg-light'>Connection failure wait to try again...</h1>";
        }

        if(isset($_GET['submit'])){
            
                $name = clean($_GET['name']);
                $email = clean($_GET['email']);
                $number = clean($_GET['number']);
                $date = clean($_GET['date']);
                $time = clean($_GET['time']);
                $people = clean($_GET['people']);
                $services = clean($_GET['services']);
                
                $query = "INSERT INTO userbookings(username,useremail,usercontact,userdate,usertime,userquantity,userreason)
                 VALUES 
                 ('$name','$email','$number','$date','$time','$people','$services')";
	            $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
                header('location:index.php?confirm='. true);
                
        
        }
      
  ?>
    <div class="row">
    <div class="col-md">
        <h1>Booking details:</h1>
                <form  id="disable" action=""  method="GET">
                    <input class="form-control" type="text" name="name" placeholder="Name" required><br>
                    <input class="form-control" type="email" name="email" placeholder="name@provider.com" required><br>
                    <input class="form-control" type="tel" name="number" placeholder="cell number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required>
                    <small><i class="text-muted rem:0.25">ex:123 456 7890</i></small><br><br>
                    
                    <input class="form-control" type="date" name="date" required><br>
                    <input class="form-control" type="time" name="time"  required><br>
  
                    <select class="form-control" name="people" id="choose" required>
                    <option value="">People</option>
                    <option value="1">1 person</option>
                    <option value="2">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                    </select><br>
                    

                    <select class="form-control" name="services" id="options" required>
                    <option value="">Service</option>
                    <option value="eat only">Eat only</option>
                    <option value="eat and show">Eat and show</option>
                    <option value="treatment only">Treatment only</option>
                    <option value="eat and treatment">Eat and treatment</option>
                    </select><br>
                    <input  class="btn btn-primary btn-md" type="submit" name="submit" value="Book" id="">
                    
                </form>
            </div>

            
            <div class="col">
            <div class="col">
                <table class="table">
                <thead>
                <?php 
                     if(isset($_GET['confirm'])){
                    
                        $query = "SELECT * FROM userbookings ORDER BY userid DESC limit 1";
                        $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
                        $row = $result->fetch_assoc();
                        echo "<form action='edit-booking.php' method='POST'>";
                        echo "<th scope='col'>";
                                echo "<h1>Confirm information:</h1>";
                            echo "</th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Name: ". $row['username'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Email: ". $row['useremail'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Contact number: ". $row['usercontact'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Date: ". $row['userdate'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Time: ". $row['usertime'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "How many: ". $row['userquantity'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "Services: ". $row['userreason'];
                            echo "</th>";
                        echo "<th>";
                        echo "<tr>";
                            echo "<th scope='col'>";
                                echo "<a class='btn btn-warning m-2' href='edit-booking.php'>Edit</a>";
                                echo "<a class='btn btn-success' href='edited.php?success=true' >Confirm</a>";
                            echo "</th>";  
                        echo "<th>";
                        echo "<a class='btn btn-primary' href='download.php'>Download</a>";
                        echo "</form>";
                }
                ?>
                </thead>
                </table>
    </script>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>