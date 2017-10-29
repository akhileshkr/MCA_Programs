<html>
<body>
<font face = 'calibri'>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db='SNG';
$usr=$_GET['usr'];
$pass=$_GET['pass'];

$con=new mysqli($dbhost,$dbuser,$dbpass,$db);
$query="SELECT * FROM LOGIN WHERE USERNAME = '$usr'and PASSWORD='$pass'";


$result=$con->query($query);
//if($result==TRUE)
//{
  if($rw=$result->fetch_row())
  { 
   
      include_once 'Loginpage.php';
    }
    else
    {
      echo "LOGIN FAILED";
    }
  


?>
</font>
</body>
</html>