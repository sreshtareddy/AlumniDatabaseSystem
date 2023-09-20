<?php
session_start();
$al_id = $_POST['alid'];

$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "DELETE from alumnis
              	 where ('$al_id' = alu_id)";

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