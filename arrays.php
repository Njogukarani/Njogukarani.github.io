<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h2>Working With Arrays</h2>
	<?php 
		echo "<h4>Indexed Arrays</h4>";
		$myArray=array(23,45.05,"Manono","Mike","Deadpool",31);
		//print all the values
		echo "<pre>";
		print_r($myArray);
		echo "</pre>";

		//how to access items in your indexed array
		echo "<br>";
		echo "Item at position 1 is " .$myArray[0];

		echo "<br>";
		echo "<h4>Multidimensional or Nested Array</h4>";
		$nested=[24,10,"Messi",11,"Salah",array("Jani jani",12,"january"),"outside"];
		echo "<pre>";
		print_r($nested);
		echo "</pre>";
		echo $nested[5][1];
		echo "<br>";
		echo "<h4>Associative Array</h4>";
		$assoc=array("First_Name"=>"Manono","Last_Name"=>"Karani","Hobby"=>"Footballing");
		echo "<pre>";
		print_r($assoc);
		echo "</pre>";
		echo $assoc["First_Name"];
		echo "<br>";
		echo "Howdy my name is " .$assoc["First_Name"] . " " .$assoc["Last_Name"] . " and my hobby is " .$assoc["Hobby"];
		echo "<br><hr>";
		$marks=array(
				"Andrew"=>array(
					"PHP"=>7,
					"HTML"=>34,
					"CSS"=>51
				),
				"Allan"=>array(
					"PHP"=>23,
					"HTML"=>34,
					"CSS"=>45
				),
				"Moses"=>array(
					"PHP"=>27,
					"HTML"=>43,
					"CSS"=>56
				)
		);
		echo "<pre>";
		print_r($marks);
		echo "</pre>";
		echo "<br>";
		echo "Hi " . $marks[0] . " in the following " .$marks["Andrew"][0] . " you scored " .$marks["Andrew"]["PHP"] ;

		echo "<h2>Array Functions</h2>";
		$numbers=array(4,5,6,7,8,9,0);
		echo "<pre>";
		print_r($numbers);
		echo "</pre>";
		echo "Count items in an array " .count($numbers);
		echo "<br>";
		echo "The last item in an array is " . $numbers[count($numbers) - 1];
		echo "<br>";
		echo "Max value " .max($numbers);
		echo "<br>";

	 ?>

</body>
</html>