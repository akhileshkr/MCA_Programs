<html>
	<body>
		<form name="frm" action="arrayfunction.php" method="post">
			<center><input type="text" name="arraybox">
			<input type="submit" name="submit" value="insert array"></center>
			<input type="submit" name="submit" value="display array"><br>
			<input type="submit" name="submit" value="ascending order"><br>
			<input type="submit" name="submit" value="descending order"><br>
			<input type="submit" name="submit" value="merging"><br>
			<input type="submit" name="submit" value="No of elements"><br>
			<input type="submit" name="submit" value="reverse order"><br>
			<input type="submit" name="submit" value="sum"><center>
			<input type="text" name="search">
			<input type="submit" name="submit" value="search"></center>
		</form>
	</body>
	<?php
		if(isset($_POST['submit']))
		{
		$array1=array(5,43,84,45,10,50);
		$array2=array("a","b","c","red","green","blue",10);
		switch($_POST['submit'])
		{
			case 'insert array':
								array_push($array2,$_POST['arraybox']);
								foreach ($array2 as $x)
								{
									echo "$x ,";
								}
								
								break;
			case 'display array':
								foreach ($array1 as $x)
								{
									echo "$x ,";
								}
								echo "<br>";
								foreach ($array2 as $y)
								{
									echo "$y ,";
								}
								break;
			case 'ascending order':
								asort($array1);
								foreach ($array1 as $x)
								{
									echo "$x ,";
								}
								break;
			case 'descending order':
								arsort($array1);
								foreach ($array1 as $x)
								{
									echo "$x ,";
								}
								break;
			case 'merging':
								$m=array_merge($array1,$array2); 
								foreach ($m as $x)
								{
									echo "$x ,";
								}
								break;
			case 'No of elements':
								echo count($array1);
								break;
			case 'reverse order':
								$rev=array_reverse($array2);
								foreach ($rev as $x)
								{
									echo "$x ,";
								}
								break;
			case 'search':
								if(array_search($_POST['search'],$array2))
								{
									echo "array is founded";
								}
								else 
								{
									echo "array is not founded";
								}
								break;
			case 'sum':
								echo array_sum($array1);
								break;
		}
	}
	?>
</html>