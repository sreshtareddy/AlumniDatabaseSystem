<?php
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $databaseName = "alumni";
      
      
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
      $ea_id = $_POST['aid'];          
      $d_no = $_POST['dno'];
      $alname = $_POST['alname'];
    $con = $_POST['cntc'];
$adr = $_POST['addr'];
$adye = $_POST['adyr'];
$coye = $_POST['coyr'];
$cup = $_POST['cuop'];
$email=$_POST['em'];
$linkedin = $_POST['lin'];
$youtube =$_POST['you'];
      
    $query = "UPDATE `alumnis` SET `alu_id`='".$ea_id."',`d_no`='".$d_no."',`alu_name`='".$alname."',`contact`='".$con."',`address`='".$adr."',`admit_yr`='".$adye."',`com_yr`='".$coye."',`e_mail`='".$email."',`linked_in`='".$linkedin."',`youtube`='".$youtube."' WHERE `alu_id`= $ea_id";
    
    $result = mysqli_query($connect, $query);  
      
   if($result)
   {
       echo 'Data Updated';
   } else {
       echo 'Data not Updated';
   }
      mysqli_close($connect);
  
?>
