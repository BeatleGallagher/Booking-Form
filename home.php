<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Example</title>
</head>
<body>
    <!-- Video container -->
    <div id="video-container">
        <video autoplay muted loop poster="video-poster.jpg">
            <source src="cloud web designs examples.mp4" type="video/mp4">
            <!-- Add additional source elements for different video formats (WebM, Ogg) -->
        </video>
    </div>
        <a class="btn btn-primary" href="index.php">Go to example</a>
        <?php
            require('db_conn.php');
        
            
        if(isset($_GET['success'])){
         

            echo "<div class='text-center bg-primary'><p>Check your email for booking confirmation details,thanks.</p></div>";
        }
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
