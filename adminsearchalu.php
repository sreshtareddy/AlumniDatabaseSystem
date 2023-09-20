<?php
$evtid = $_POST['alid'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"SELECT * FROM alumnis where alu_id = '$evtid'");


?> 


<!DOCTYPE html>
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="11"><h2>Alumni Record</h2></th>
        </tr>
        <t>
            <th>alu_id</th>
            <th>d_no</th>
            <th>alu_name</th>
            <th>contact</th>
            <th>address</th>
            <th>admit_yr</th>
            <th>com_yr</th>
            <th>cur_opr</th>
            <th>email</th>
            <th>linked_in</th>
            <th>youtube</th>
            
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              <td><?php echo $rows['alu_id'] ?></td>
              <td><?php echo $rows['d_no'] ?></td>
            <td><?php echo $rows['alu_name'] ?></td>
            <td><?php echo $rows['contact'] ?></td>
            <td><?php echo $rows['address'] ?></td>
            <td><?php echo $rows['admit_yr'] ?></td>
            <td><?php echo $rows['com_yr'] ?></td>
            <td><?php echo $rows['cur_opr'] ?></td>
            <td><?php echo $rows['e_mail'] ?></td>
             <td><?php echo $rows['linked_in'] ?></td>
            <td><?php echo $rows['youtube'] ?></td>
            
</tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>