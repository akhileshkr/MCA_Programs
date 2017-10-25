<html>
<body>
<form action="vowels.php" method="POST">
Enter a string: <input type="text" name="txt1">
<input type="submit" name="submit" value="submit">
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['txt1'];
$arr=array(a,e,i,o,u);


if(isset($_POST['submit']))
{
$count=0;
$counta=0;
$counte=0;
$counti=0;
$counto=0;$countu=0;
for($i=0;$i<=strlen($a);$i++)
	{
		for($j=0;$j<5;$j++)
		{
			if($arr[$j]==substr($a,$i,1))
			{
				$count=$count+1;
				if ($arr[0]==substr($a,$i,1))
					$counta=$counta+1;
				elseif ($arr[1]==substr($a,$i,1))
					$counte=$counte+1;
				elseif($arr[2]==substr($a,$i,1))
					$counti=$counti+1;
				elseif ($arr[3]==substr($a,$i,1))
					$counto=$counto+1;
				elseif ($arr[4]==substr($a,$i,1))
					$countu=$countu+1;
			}
		}
	}
echo "<h2>Number of vowel(s) is $count</h2>";
echo "<h2>Number of a is $counta</h2>";
echo "<h2>Number of e is $counte</h2>";
echo "<h2>Number of i is $counti</h2>";
echo "<h2>Number of o is $counto</h2>";
echo "<h2>Number of u is $countu</h2>";
}
}
?>