<?php
	$a=$_POST['txt1'];
	$b=$_POST['txt2'];
	$c=$_POST['b1'];
	if($c=="*")
	{
		$t=$a*$b;
		echo"RESULT : $t";
	}
	elseif($c=="+")
	{
		$t=$a+$b;
		echo"RESULT : $t";
	}
	elseif($c=="-")
	{
		$t=$a-$b;
		echo"RESULT : $t";
	}
	elseif($c=="/")
	{
		$t=$a/$b;
		echo"RESULT : $t";
	}
	else
		echo "ERROR!!!!!"
	
?>