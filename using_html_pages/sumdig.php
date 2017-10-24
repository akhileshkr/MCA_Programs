<?php
	$a=$_POST['txt1'];
	$s=0;
	while($a!=0)
	{
		$b=$a%10;
		$s=$s+$b;
		$a=$a/10;	
	}
	echo "sum of the digit = $s";
?>