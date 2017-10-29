<?php
/* connection string in mysql

CREATE DATABASE SNG;
USE SNG;
CREATE TABLE MAC(ROLLNO VARCHAR(10),NO VARCHAR(10),CLASS VARCHAR(10));
CREATE USER SFOUR@LOCALHOST IDENTIFIED BY 'ABC';
GRANT ALL PRIVILEGES ON SNG.* TO mca@localhost IDENTIFIED BY 'abc';
*/
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db='sng';
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];

//$conn = mysql_connect($dbhost,$dbuser,$dbpass);
$con=new mysqli($dbhost,$dbuser,$dbpass,$db);
//$query="SELECT rollno,no,class from mac";

$query="insert into mca values('$t1','$t2','$t3')";
//$query="delete from mca where no='gg'";
//$query="update mca set no=200 where rollno=2";

$result=$con->query($query);


/*
while($rw=$result->fetch_object())
{
echo $rw->rollno."      ";
echo $rw->no."   ";
echo $rw->class."   ";
echo "<br>";
}
*/

/*
while($rw=$result->fetch_row())
{
echo $rw[0]."      ";
echo $rw[1]."   ";

echo $rw[2];
echo "<br>";
}*/
/*
while($rr=$result->fetch_array(MYSQLI_ASSOC))
{

echo $rr['rollno'];
echo $rr['no'];
}

*/




?>
