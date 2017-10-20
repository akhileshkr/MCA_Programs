<?php
	$a=$_POST['txt1'];
	$b=1;
	echo "factorial of $a is:";
	for ($i=1;$i<=$a;$i++)
	{
		$b=$b*$i;
	}
	echo $b;
?>