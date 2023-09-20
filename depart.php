<?php
session_start();
$d_no = $_POST['dep'];
$d_name=$_POST['name'];
$co_ordinator=$_POST['co'];
$d_phno=$_POST['phone'];

$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "INSERT INTO department(d_no,d_name,co_ordinator,d_phno)
              	 VALUES ('$d_no','$d_name','$co_ordinator','$d_phno')";

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