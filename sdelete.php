<?php
session_start();
$st_id = $_POST['stid'];

$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "DELETE from student
              	 where ('$st_id' = std_id)";

		 if (mysqli_query($conn, $sql))
            	{
                	//Getting id of lastly inserted record'.$error.'
                	$last_id = mysqli_insert_id($conn);
   
   	             echo '<script type="text/javascript">alert("data deleted successful!")</script>';
        	                       
            	}
                

            	else {
                	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            	}
               }
            	mysqli_close($conn); 

?>