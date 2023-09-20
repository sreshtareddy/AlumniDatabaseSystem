<?php
$occup = $_POST['ocup'];
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"SELECT A.alu_name,A.cur_opr,A.e_mail FROM alumnis A where A.cur_opr = '$occup'");


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
            <th>alumni_name</th>
            <th>current_occupation</th>
            <th>e-mail</th>
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
              <td><?php echo $rows['alu_name'] ?></td>
              <td><?php echo $rows['cur_opr'] ?></td>
            <td><?php echo $rows['e_mail'] ?></td>
</tr>
        
  <?php      
     }
          
          

mysqli_close($con);
          
        ?>
        </table>
        </form>
  <link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="invite.php" method="POST">      
     <center><h3>Invite an Alumni</h3></center>
      <fieldset>
      <input type="text" name="email" placeholder="Enter email" required>
    </fieldset>
      
      <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">INVITE</button>
    </fieldset>
      
  </form>
    </div>
    </body>
</html>