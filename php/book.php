<?php
	$a=array(array('Title'=>'ANSIC','Author'=>'balaguru swami','price'=>'1300'),array('Title'=>'Programming with c','AUTHOR'=>'balaguru swami','price'=>'450'));
	echo "<center><table border='1'><tr>";
	foreach($a[0] as $key=>$value)
	{
		echo "<th>$key </th>";
	}
	echo "</tr><tr>";
	for($i=0;$i<2;$i++)
	{
	foreach($a[$i] as $key=>$value)
	{
		echo "<td>$value</td>";
	}echo "</tr><tr>";
	}
	echo "</tr></table></center>";
?>