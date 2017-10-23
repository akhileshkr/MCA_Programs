<?php
	$a=$_POST['txt1'];
	echo " prime numbers in $a is:";
	function fun($a)
	{
	for($j=2;$j<$a;$j++)
	{
		$num=$j;
		for($i=2;i<$num;$i++)
		{
			if($num%$i==0)
			{
				break;
			}
		}
		if($num==$i)
		{
			echo "<br> $num " ;
		}
	}}
	fun($a);
?>