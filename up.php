<?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "alumni";
      
      
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
      $d_no = $_POST['id'];
      $d_name = $_POST['name'];
      $co_ordinator = $_POST['co_ordinator'];
      $d_phno = $_POST['phno'];
      
    $query = "UPDATE `department` SET `d_name`='".$d_name."',`co_ordinator`='".$co_ordinator."',`d_phno`='".$d_phno."' WHERE `d_no`= $d_no";
    
    $result = mysqli_query($connect, $query);  
      
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data not Updated';
   }
      mysqli_close($connect);
  
?>
