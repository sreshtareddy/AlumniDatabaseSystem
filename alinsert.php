<?php
session_start();
$al_id = $_POST['id'];
$d_no = $_POST['dno'];
$a_name = $_POST['name'];
$p_no = $_POST['pno'];
$adr = $_POST['addr'];
$a_yr = $_POST['adyr'];
$c_yr = $_POST['cyr'];
$cuor = $_POST['coc'];
$em = $_POST['em'];
$lin=$_POST['lin'];
$youtube = $_POST['you'];



$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "INSERT INTO alumnis(alu_id,d_no,alu_name,contact,address,admit_yr,com_yr,cur_opr,e_mail,linked_in,youtube)
              	 VALUES ('$al_id','$d_no','$a_name','$p_no','$adr','$a_yr','$c_yr','$cuor','$em','$lin','$youtube')";

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