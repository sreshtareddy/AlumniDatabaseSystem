<?php
$d_no = $_POST['dep'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT * FROM department where d_no=$d_no");


?> 




<!DOCTYPE html>
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="4"><h2>Department Record</h2></th>
        </tr>
        <t>
        <th>dep</th>
            <th>name</th>
            <th>co</th>
            <th>phone</th>
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              <td><?php echo $rows['d_no'] ?></td>
              <td><?php echo $rows['d_name'] ?></td>
             <td><?php echo $rows['co_ordinator'] ?></td>
            <td><?php echo $rows['d_phno'] ?></td>
</tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>