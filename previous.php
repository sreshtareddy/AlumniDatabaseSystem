<?php
$et_id = $_POST['evid'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"SELECT alu_name FROM alumnis A,alumni_events E,participated_by P WHERE A.alu_id=P.alu_id AND E.evt_id=P.evt_id AND p.evt_id ='$et_id'");


?> 




<!DOCTYPE html>
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="6"><h2>Previous Event Record</h2></th>
        </tr>
        <tr>
            <th>alumni_name</th>
        </tr>
    
    
<?php
      while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
            <td><?php echo $rows['alu_name'] ?></td></tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>