<?php
session_start();
$e_id = $_POST['id'];
$e_name=$_POST['name'];
$e_date=$_POST['date'];
$venue=$_POST['venue'];



$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "INSERT INTO alumni_events(evt_id,evt_name,evt_date,evt_venue)
              	 VALUES ('$e_id','$e_name','$e_date','$venue')";

		 if (mysqli_query($conn, $sql))
            	{
                	//Getting id of lastly inserted record'.$error.'
                	$last_id = mysqli_insert_id($conn);
   
   	             echo '<script type="text/javascript">alert("data inserted successful!")</script>';
        	                       
            	}
                

            	else {
                	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            	}
               }
            	mysqli_close($conn); 

?>