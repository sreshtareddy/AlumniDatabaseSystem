<?php
$al = $_POST['n1'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"SELECT alu_name,
contact,cur_opr FROM alumnis where alu_name = '$al'");


?> 




<!DOCTYPE html>
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="3"><h2>Alumni Event Record</h2></th>
        </tr>
        <t>
            <th>alname</th>
            <th>contact</th>
            <th>cur_occu</th>
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              
            <td><?php echo $rows['alu_name'] ?></td>
            <td><?php echo $rows['contact'] ?></td>
            <td><?php echo $rows['cur_opr'] ?></td>
</tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>