<html>
<head><h1><center>Integer Validation</center></h1></head>
<body>
<form method="POST">
<br><br><br><br>
<center> Enter a value<input type="text" name="txt1">
<input type="submit" value="Click here" name="b1"><br>
<center>
</form>
<?php
if(isset($_POST["b1"]))
{
$s=$_POST['txt1'];
if(is_numeric($s))
{
echo "valid Integer";
}
else
{
echo "it is not an valid  integer";
}
}
?>
</body>
</html>