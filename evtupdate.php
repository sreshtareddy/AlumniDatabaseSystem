<?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "alumni";
      
      
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
      $ev_id = $_POST['eid'];          
      $ev_name = $_POST['ename'];
      $evdate = $_POST['edate'];
      $evenue = $_POST['evenue'];
      
    $query = "UPDATE `alumni_events` SET `evt_name`='".$ev_name."',`evt_date`='".$evdate."',`evt_venue`='".$evenue."' WHERE `evt_id`= $ev_id";
    
    $result = mysqli_query($connect, $query);  
      
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data not Updated';
   }
      mysqli_close($connect);
  
?>
