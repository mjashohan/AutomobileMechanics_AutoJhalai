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
                     
                    error_reporting(E_ALL & ~E_NOTICE);
                    session_start();
                    if(isset($_SESSION['username']))
                    {
                    $username=$_SESSION['username'];
                        if($username=='shohan'){
                            echo "MJA Shohan";
                        }
                        elseif($username=='ananto'){
                            echo "Rahatul Amin Ananto";
                        }
                        else{
                            echo "Anas Shahab";
                        }
                         ?>
                     <a href = "Logout.php" style="text-decoration:none;">(Logout)</a> <a href="index.html">Home</a><?php
                    }
                    else{?>
                        
                     <?php
                    }
                     ?>
            <a href="editor.php"><button type="submit">Edit</button></a>
            <div id="main"><?php
               
                    $query = "Select * FROM appointments;";
                    $response = @mysqli_query($dbc, $query);
                    $cat_rs = mysqli_fetch_array($response);
                    echo "<table>
                    <tr>
                            <th><h4>Name</h4></th>
                            <th><h4>Address</h4></th>
                            <th><h4>Phone</h4></th>
                            <th><h4>Car License Number</h4></th>
                            <th><h4>Car Engine Number</h4></th>
                            <th><h4>Appointment Date</h4></th>
                            <th><h4>Mechanic</h4></th>
                            </tr>";
                
            
                    do{
                        echo "<tr>";
                        echo "<td>".$cat_rs['Name']."</td>";
                        echo "<td>".$cat_rs['Address']."</td>";
                        echo "<td>".$cat_rs['Phone']."</td>";
                        echo "<td>".$cat_rs['Car_License_Number']."</td>";
                        echo "<td>".$cat_rs['Car_Engine_Number']."</td>";
                        echo "<td>".$cat_rs['Appointment_Date']."</td>";
                        echo "<td>".$cat_rs['Mechanic']."</td>" ;
                        echo "</tr>";
                    }
                while ($cat_rs = mysqli_fetch_array($response));
                    echo "</table>";
                        ?>
                
                                </div>
        </div>
            <p>
            <div class="footer">
    &copy; AutoJhalai. All rights reserved by MJA Shohan &trade;
            </div>
        </p>
    </body>
</html>