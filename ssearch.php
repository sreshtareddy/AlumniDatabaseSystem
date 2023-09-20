<?php
$st_id = $_POST['sid'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT * FROM student where std_id=$st_id");


?> 


<!DOCTYPE html> 
<html>
    <title>
         <head>Fetch data from database</head>
    </title>
    
    <body><form>
      <table align="center" border="1px" style="width: 300px; line-height: 40px;">
         <tr>
            <th colspan="6"><h2>Student Record</h2></th>
        </tr>
        <t>
            <th>sid</th>
            <th>dno</th>
            <th>sname</th>
            <th>sem</th>
            <th>sno</th>
            <th>semail</th>
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              <td><?php echo $rows['std_id'] ?></td>
              <td><?php echo $rows['d_no'] ?></td>
            <td><?php echo $rows['std_name'] ?></td>
            <td><?php echo $rows['sem'] ?></td>
             <td><?php echo $rows['s_phno'] ?></td>
            <td><?php echo $rows['s_email'] ?></td>
</tr>
        
  <?php      
     }
          

mysqli_close($con);
        ?>
        </table>
        </form>
    </body>
</html>