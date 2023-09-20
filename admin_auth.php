<? php
session_start();
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$message="";
if(count($_POST)>0) {
    $conn=mysqli_connect("localhost","root","","alumni");
    if("$Username"=="Admin"&&"$Password"=="root")
    {
        header("Location: localhost/ddd/admin.html");
    }
    else{
        echo '<script type="text/javascript">alert("wrong username or password")</script>';
    }
}
?>
