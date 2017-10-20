<html>
<head><h1><center>Email Validation</center></h1></head>
<body>
<form method="POST">
<center> Enter an Email address<input type="text" name="txt1">
<input type="submit" value="validate" name="b1"><br>
<center>
</form>
<?php
if(isset($_POST["b1"]))
{
$em=$_POST['txt1'];
if(filter_var($em,FILTER_VALIDATE_EMAIL)==true)
{
echo "you have entered an valid email format";
}
else
{
echo "you have entered an  invalid email format";
}
}
?>
</body>
</html>