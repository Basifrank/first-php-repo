<!DOCTYPE html>
<html lang="en">
<head>
	<title>StartNG PHP Test Class</title>
</head>
<body>

	<form action="index.php" method="POST">

		<label for="name">Enter Your Name</label>

		Full Name: <input id="name" type="text" name="username" required> <br> <br>

		<label for="year">Enter Your Year of Birth</label>

		Year of Birth: <input id="year" type="number" name="birthyear" min="1950" max="2018" required>  <br> <br>

		<input type="submit" name="submit" value="Check My Age!">
		
	</form>


</body>
</html>






<?php

if (isset($_POST["submit"])) {
	# code...
	$name = $_POST["username"];
	$year = $_POST["birthyear"];
	$currentyear = 2019;
	$age = $currentyear - $year;
	echo "<pre>Welcome " .$name. ", you are " .$age. " years old :)</  pre>";
}




echo "Hello Africa";

$string = "I am a boss";

$number = 20;

echo $string . " " . $number;


?>