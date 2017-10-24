<html>
	<body>
		<form name="frm" method="post"action="string.php">
			<input type="text" name="str">
			<select name="dropdown">
			<option value="select" selected>...SELECT...</option>
			<option value="length">LENGTH</option>
			<option value="rev">REVERSE</option>
			<option value="up">UPPERCASE</option>
			<option value="low">LOWERCASE</option>
			<option value="replace">REPLACE</option>
			</select>
			<input type="text" name="txt">
			<input type="submit" value="cilck">
		</form>
	</body>
</html>
<?php
	$a=$_POST['str'];
	$b=$_POST['dropdown'];
	$c=$_POST['txt'];
	switch($b)
	{
		case 'length':
					echo  strlen($a);
					break;
		case 'rev':
					echo strrev($a);
					break;
		case 'up':
					echo strtoupper($a);
					break;
		case 'low':
					echo strtolower($a);
					break;
		case 'replace':
					echo str_replace($a, $c, $a);
					break;
		case 'select':
					break;
	}
?>
