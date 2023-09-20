<?php

$std_name=$email=$message=$std_id=$evt_name= "";


$std_name = $_POST['std_name'];
$std_id = $_POST['std_id'];
$evt_id = $_POST['evt_id'];
$email = $_POST['email'];


$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else  {   
         
         //$var=mysqli_query($conn,"SELECT evt_id from alumni_events where evt_name='$evt_id'");
         
         //$userid=mysqli_fetch_array($var); 
         $now = date_create()->format('Y-m-d H:i:s');
         
		 $sql ="insert into registers(rd_id,std_id,evt_id,rd_date)
              	 VALUES (null,'$std_id','$evt_id','$now')";

		 if (mysqli_query($conn, $sql))
            	{
                	//Getting id of lastly inserted record'.$error.'
                	$last_id = mysqli_insert_id($conn);

   	             echo '<script type="text/javascript">alert("You have successfully registered for the event!")</script>';
        	                       
            	}
                

            	else {
                	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            	}
               }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if(empty($_POST["message"])) {
        $message="This is a confirmation mail that,you have registered for the event!!!";
    } else {
        $message=test_input($_POST["message"]);
    }
    
    $to='sreshtareddy001@gmail.com';
    $subject='registration form for event';
    if(mail($to,$subject,$message)){
        //$success="you have successfully registered for this event!";
        $std_name = $email = $evt_name = $message = $std_id ='';
    }
}
function test_input($data) {
    $data =trim($data);
    $data =stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
?>