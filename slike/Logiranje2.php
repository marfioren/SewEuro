<?php
 
   $con=mysqli_connect("localhost","web1525","rf220311","usr_web1525_1");
  $con->set_charset("utf8");
   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $username = $_GET['username'];
   $password = $_GET['password'];
   $result = mysqli_query($con,"SELECT * FROM ZaposleniciAplikacija WHERE Korime='$username' and Lozinka='$password'"); 
     
	if($result->num_rows > 0){
	  while($res = $result->fetch_assoc()) {
			echo $res["id"];
		}	
		
	}
	else{
		echo "No";		
	}

   mysqli_close($con);
?>