<html>
<body>
<form method="get">
<center>

<input type="submit" value="Click" name="bt1"/><u>Here for date formats:</u><br>
<?php
if($_GET['bt1'])
{
echo "Date In Different Format"."<br>";
echo "Today is " . date("d/m/y") . "<br>";
echo "Today is " . date("D-M-Y") . "<br>";
echo "Today is " . date(" l  dS M Y") . "<br>";
echo "Today is " . date(" l dS \of F Y") . "<br>";
}
?>
</center>
</form>
</body>
</html>
