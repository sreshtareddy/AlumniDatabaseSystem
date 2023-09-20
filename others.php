<html>
<title>OTHERS</title>
    <head>
     <link rel = "icon" href =
"h.jpg"
        type = "image/x-icon">
        <style>
         h1{
               background-color: orange;
               align-items: stretch;
               color:white;
                 
           }
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
            * {
  box-sizing: border-box;
}

        </style>
    </head>
    <body>
        <h1><pre><img src="logo.png" width="100px" height="100px">                        BANGALORE INSTITUTE OF TECHNOLOGY<br>                                            bangalore
            <br></pre></h1><br>
    <div class="row">
  <div class="column">
 <?php
$con=mysqli_connect("localhost","root","","alumni");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries rew
$result = mysqli_query($con,"CALL `dispaly`();

");


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
            <th>event name</th>
            <th>event date</th>
            <th>event venue</th>
            
            
        </t>
    
    
<?php
     while($rows = mysqli_fetch_assoc($result))
     {
?>
        <tr>
            
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
  </div>
  <div class="column">
<img src="five.jpg" height="150px" width="150px">
      <img src="six.jpg" height="150px" width="150px">
      <img src="one.jpg" height="150px" width="150px"><br><br>
      <img src="two.jpg" height="150px" width="150px">
      <img src="three.jpg" height="150px" width="150px">
      <img src="seven.jpg" height="150px" width="150px">
  </div>
</div>
    
    </body>

</html>

