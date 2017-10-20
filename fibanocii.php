<?php
$a=$_POST['num'];
$b=0;
$c=1;
for($i=0;$i<$a;$i++)
{
	echo "	$b	";
	$t=$b+$c;
	$b=$c;
	$c=$t;
}
?>