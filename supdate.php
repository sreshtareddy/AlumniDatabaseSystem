<?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "alumni";
      
      
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
      $s_id = $_POST['sid'];          
      $d_no = $_POST['dno'];
      $s_name = $_POST['name'];
      $sem = $_POST['sem'];
      $st_no = $_POST['sno'];
      $st_email = $_POST['semail'];
      
    $query = "UPDATE `student` SET `d_no`='".$d_no."',`std_name`='".$s_name."',`sem`='".$sem."',`s_phno`='".$st_no."',`s_email`='".$st_email."' WHERE `std_id`= $s_id";
    
    $result = mysqli_query($connect, $query);  
      
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data not Updated';
   }
      mysqli_close($connect);
  
?>
