<!DOCTYPE html>
<html>
<head>
	<title>My PHP</title>
</head>
<body>
	<?php 
	echo "My Name is Manono";
	echo "<br>";
	//echo is used to display information as output
	//variables refer to storage locations for values
	$bruce=5;
	$noah=10;
	$sum=$bruce+$noah;
	echo "$sum";
	echo "<br>";
	$anto=12;
	$king=7;
	$ngumu=$anto-$king;
	echo "$ngumu";
	echo "<br>";
	$anto=12;
	$king=7;
	$ans=$anto*$king;
	echo "$ans";
	echo "<br>";
	$anto=12;
	$king=2;
	$noma=$anto/$king;
	echo "$noma";
	echo "<br>";
	echo "My name is Manono and my age is ".$sum;
	//.is used for concatenating two variables
	echo "<br>";
	$i="Victor";
	$p="Micheal";
	echo "my name is ".$i. "and i sit next to ".$p;
	echo "<br>";
	$po=23;
	$tiger=3;
	$kungfu=$po%$tiger;
	echo "is ".$kungfu;
	echo "<br>";
	if ($noah<40) {
		# code...
		echo "Can Vie";
	}
	else{
		echo "Cant vie";
	}
	 ?>
	

</body>
</html>