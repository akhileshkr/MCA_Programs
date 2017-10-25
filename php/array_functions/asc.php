<html>
<body><center>
<form method="POST">
<h2><u>Array Sort</u></h3>
<input type="submit" name="sbtn" value="ASC" />
<input type="submit" name="sbtn" value="DESC" /><br><br>
<?php
if(isset($_POST['sbtn']))
{
$sort=array('1'=>'30','2'=>'15','3'=>'50','4'=>'25','5'=>'10');
if($_POST['sbtn']=="ASC")
{
	sort($sort);
	echo "The values are.."."<br>";
	foreach($sort as $value)
		echo $value."<br>";
} 
if($_POST['sbtn']=="DESC")
{
	rsort($sort);
	echo "The values are.."."<br>";
	foreach($sort as $value)
		echo $value."<br>";
}}
?>
</form></center>
</body>
</html>