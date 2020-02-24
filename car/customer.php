<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Customer Panel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
        <script src="jquery-2.2.4.min_2.js"></script>
    </head>
    <body>
        
        <header>
            <a href="index.html"><img src="banner.jpg" id="ban"/></a>
        </header>
        <div id="wrapper">
            <h2>Fill up the form below to get our super services!</h2>
                    <form action="form.php" method="POST">
         Name:<br> <input type="text" name="name" /> <br/>
        Address:<br> <input type="text" name="address" /> <br/>
        Phone:<br> <input type="text" name="phone" /> <br/>
        Car License Number:<br> <input type="text" name="Car_License_Number" /> <br/>
        Car Engine Number:<br> <input type="text" name="Car_Engine_Number" /> <br/>
        Appointment Date:<br> <input type="date" name="appointment_date" /> <br/>
        Select your mechanic:<br> <select name="mechanic" onclick="countmachine.php">
               <option value ="Bruce Wayne" selected="selected">Bruce Wayne</option>
               <option value ="Barry Allen">Barry Allen</option>
               <option value ="The Doctor">The Doctor</option>
               <option value ="Jon Snow">Jon Snow</option>
               <option value ="Tyrion Lannister">Tyrion Lannister</option>
               </select><br/><br/>
        <input type="submit" name="submit" /> <input type="reset" />
        </form>

        <details>
            <summary><h4>List of free Mechanics</h4></summary>
        <?php
        require 'mysqli_connect.php';

        $sql1="SELECT COUNT(*) FROM appointments WHERE Mechanic='Bruce Wayne'";
        $result1=mysqli_query($dbc,$sql1);
        $rows=mysqli_fetch_assoc($result1);
        $x=4;
        $y=$rows['COUNT(*)'];    
            
        echo 'Available slots for Bruce : '.($x-$y).'<br><br>';
        
        $sql2="SELECT COUNT(*) FROM appointments WHERE Mechanic='Barry Allen'";
        $result2=mysqli_query($dbc,$sql2);
        $rows=mysqli_fetch_assoc($result2);
        $x=4;
        $y=$rows['COUNT(*)'];    
            
        echo 'Available slots for Barry: '.($x-$y).'<br><br>';
        
        $sql3="SELECT COUNT(*) FROM appointments WHERE Mechanic='The Doctor'";
        $result3=mysqli_query($dbc,$sql3);
        $rows=mysqli_fetch_assoc($result3);
        $x=4;
        $y=$rows['COUNT(*)'];    
            
        echo 'Available slots for Doctor: '.($x-$y).'<br><br>';
        
        $sql4="SELECT COUNT(*) FROM appointments WHERE Mechanic='Jon Snow'";
        $result4=mysqli_query($dbc,$sql4);
        $rows=mysqli_fetch_assoc($result4);
        $x=4;
        $y=$rows['COUNT(*)'];    
            
        echo 'Available slots for Jon: '.($x-$y).'<br><br>';
        
        $sql5="SELECT COUNT(*) FROM appointments WHERE Mechanic='Tyrion Lannister'";
        $result5=mysqli_query($dbc,$sql5);
        $rows=mysqli_fetch_assoc($result5);
        $x=4;
        $y=$rows['COUNT(*)'];    
            
        echo 'Available slots for Tyrion: '.($x-$y).'<br>';
        
        
        
        
        
        
        
        ?>
            </details>
            
            </div>
         <p>
        <div class="footer">
    &copy; AutoJhalai. All rights reserved by MJA Shohan &trade;
            </div>
        </p>
    </body>
</html>