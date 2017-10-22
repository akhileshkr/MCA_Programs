<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$gender=$_POST['gender'];
$addr=$_POST['addr'];
$branch=$_POST['branch'];
$lang=$_POST['lan'];
echo "STUDENT DETAILS <br>";
echo "----------------<br>";
echo "NAME: $name<br>";
echo "MAIL ID: $mail <br>";
echo "GENDER: $gender <br>";
echo "ADDRESS: $addr <br>";
echo "BRANCH: $branch<br>";
echo "LANGUAGES: $lang[0] $lang[1] $lang[2]";
?>