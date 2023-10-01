<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Edit details</title>
</head>
<body class="bg-dark">
<?php
    require('db_conn.php');
    require('functions.php'); 

    $query = "SELECT * FROM userbookings ORDER BY userid DESC limit 1";
    $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
    $row = $result->fetch_assoc();

?>
<div class="container">

<div class="row">
    <div class="col-md-6">
        <h1 class="text-light">Edit your details:</h1>
<form  action="edited.php"  method="">
                    <input class="form-control" type="text" name="name" value="<?php echo $row['username'] ?>" required><br>
                    <input class="form-control" type="email" name="email" value="<?php echo $row['useremail'] ?>" required><br>
                    <input class="form-control" type="tel" name="number" value="<?php echo $row['usercontact'] ?>" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required>
                    
                    <small><i class="text-muted rem:0.25"><p class="text-white">ex:123 456 7890</p></i></small>
                   
                    <input class="form-control" type="date" name="date" value="<?php echo $row['userdate'] ?>" required><br>
                    <input class="form-control" type="time" name="time" value="<?php echo $row['usertime'] ?>"  required><br>
  
                    <select class="form-control" name="people" id="choose" required>
                    <option value="<?php echo $row['userquantity'] ?>"><?php echo $row['userquantity'] ?></option>
                    <option value="1">1 person</option>
                    <option value="2">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                    </select><br>
                    

                    <select class="form-control" name="services" id="options" required>
                    <option value="<?php echo $row['userreason'] ?>"><?php echo $row['userreason'] ?></option>
                    <option value="eat only">Eat only</option>
                    <option value="eat and show">Eat and show</option>
                    <option value="treatment only">Treatment only</option>
                    <option value="eat and treatment">Eat and treatment</option>
                    </select><br>

                    <input type="hidden" name="userid" value="<?php echo $row['userid'] ?>">
                    <input  class="btn btn-primary btn-md" type="submit" name="submitEdit" value="Submit" id="">
                    
                </form>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

  


