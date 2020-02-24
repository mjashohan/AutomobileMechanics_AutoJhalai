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
        <div id="wrapper">
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
           <h3>Change Appointment Date or Mechanic Name for any client</h3>
    
    <form action="adminEdit.php" method="POST">
    
   Enter the Car License Number: <input type="text" name="license" placeholder="Car License Number"><br><br>
    
    Select Name of the new Mechanic: <select name="mechanic" class="drop" >
                <option hidden="hidden">Mechanic Name</option>
                <option class="drop">Bruce Wayne</option>
                <option class="drop">Barry Allen</option>
                <option class="drop">The Doctor</option>
                <option class="drop">Jon Snow</option>
                <option class="drop">Tyrion Lannister</option>
            
            
             
            
            </select><br><br>
        
        Enter new Appointment Date: <input type="date" name="appointment_date_new" /><br><br>
        
         <input type="submit" value="Confrim" id="submit">
    </form>
        </div>
    </body>
</html>