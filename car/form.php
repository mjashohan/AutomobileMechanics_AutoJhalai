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
<?php
    require_once('C:/xampp/htdocs/car/mysqli_connect.php');
	   
        
	    $data_missing = array();
	     if(empty($_POST['name'])){
			 $data_missing[]='Name';
		 }
		 else{
	    $name = $_POST['name'];
		 }
        
        $data_missing = array();
	     if(empty($_POST['address'])){
			 $data_missing[]='Address';
		 }
		 else{
	    $address = $_POST['address'];
		 }
        
        if(empty($_POST['phone'])){
			 $data_missing[]='Phone';
		 }
		 else{
	    $phone = $_POST['phone'];
		 }
        
	    
		 if(empty($_POST['Car_License_Number'])){
			 $data_missing[]='License Number';
		 }
		 else{
	    $licence = $_POST['Car_License_Number'];
		 }
	 	         
	     if(empty($_POST['Car_Engine_Number'])){
			 $data_missing[]='Engine Number';
		 }
		 else{
	    $engine = $_POST['Car_Engine_Number'];
		 }
        
        if(empty($_POST['appointment_date'])){
			 $data_missing[]='Appointment Date';
		 }
		 else{
	    $date = $_POST['appointment_date'];
		 }
        
        if(empty($_POST['mechanic'])){
			 $data_missing[]='Mechanic';
		 }
		 else{
	    $mechanic = $_POST['mechanic'];
		 }
	
	    
	    if (empty($data_missing)){

       $query="INSERT INTO appointments (Name, Address, Phone, Car_License_Number, Car_Engine_Number, Appointment_Date, Mechanic) VALUES('".$name."','".$address."','".$phone."','".$licence."','".$engine."','".$date."','".$mechanic."')"; 
          
?>   
                <div id="wrapper">
                <div id="main">
                <div class = sin><?php
		if (mysqli_query($dbc,$query)){
echo "You have an Appointment!"; 
		}
                    
	  else{
echo "Sorry, some information was missing or . Please go back and check ";
      }?></div> <?php
		}
		else{
			echo 'You need to enter the following data:<br />';
         
        foreach($data_missing as $missing){
	              echo "$missing<br />";
		}
		}
                ?> 
	    <p>
        <form action="customer.php">
		  <input type="submit" value="Go to Appointment Page"; />
		</form>
		</p>
	
	</div></div>
    </body>
</html>