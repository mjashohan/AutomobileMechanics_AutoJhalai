<?php
    require_once('C:/xampp/htdocs/car/mysqli_connect.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($dbc,$_POST['username']);
      $password = mysqli_real_escape_string($dbc,$_POST['password']); 
      
      $sql = "SELECT username, passcode FROM admin";
      $query = mysqli_query($dbc,$sql);
      if($query){
        $row=mysqli_fetch_row($query);
        $dbUsername=$row[0];
        $dbPassword=$row[1];
        
    }
    if ($username==$dbUsername && $password==$dbPassword)
    {
       $_SESSION['username']=$username;
        $_SESSION['UserID']=$userId;
       
       
        header('location: Admin.php');
       
            
    }
      }else {
         $error = "Your Login Name or Password is invalid";
      }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	<div style="padding-top: 200px">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333;" align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px;">
               
               <form action = "" method = "post">
                  <label>User Name  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br /><br/>
                  <a href="index.html" style="text-decoration:none;"> GO BACK</a>
               </form>
               
             <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php //echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
       </div>
   </body>
</html>