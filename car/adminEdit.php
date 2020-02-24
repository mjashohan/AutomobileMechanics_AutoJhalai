<?php
    require_once('C:/xampp/htdocs/car/mysqli_connect.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
        <script src="jquery-2.2.4.min_2.js"></script>
    </head>
    <body>
        
        <header>
            <a href="index.html"><img src="banner.jpg" id="ban"/></a>
            </header>
        <div id="wrapper2">
            <?php
        $mechanic="$_POST[mechanic]";
        $date="$_POST[appointment_date_new]";
        $license="$_POST[license]";
        
        $sql="UPDATE appointments SET Mechanic='$mechanic', Appointment_Date='$date' WHERE Car_License_Number='$license'";
    
    mysqli_query($dbc,$sql);
        echo "<h3>Changes have been made, good job, you're a good admin.<h3>";
        header('location: Admin.php');

mysqli_close($dbc);
            ?>
        </div>
            <p>
            <div class="footer">
    &copy; AutoJhalai. All rights reserved by MJA Shohan &trade;
            </div>
        </p>
    </body>
</html>