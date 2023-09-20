<?php
$email= "";
$email = $_POST['email'];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if(empty($_POST["message"])) {
        $message="Hello Sir
                       We cordially invite you for the event,which we are conducting in our college.So,we request your kindself to please attend the event
                                   Thanking you!!!";
    }
    else {
        $message=test_input($_POST["message"]);
    }
    
    $to='sreshtareddy001@gmail.com';
    $subject='Invitation for an Event';
    if(mail($to,$subject,$message)){
        //$success="you have successfully registered for this event!";
         $email = '';
    }
}
function test_input($data) {
    $data =trim($data);
    $data =stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 echo "You have successfully invited the alumni for event!!"

?>