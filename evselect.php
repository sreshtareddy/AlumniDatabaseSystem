<?php
$evtname = $_POST['evtname'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"SELECT * FROM alumni_events where evt_name = '$evtname'");


?> 




<!DOCTYPE html>
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="6"><h2>Alumni Event Record</h2></th>
        </tr>
        <t>
            <th>evtid</th>
            <th>evtname</th>
            <th>evtdate</th>
            <th>evtvenue</th>
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              <td><?php echo $rows['evt_id'] ?></td>
              <td><?php echo $rows['evt_name'] ?></td>
            <td><?php echo $rows['evt_date'] ?></td>
            <td><?php echo $rows['evt_venue'] ?></td>
</tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>