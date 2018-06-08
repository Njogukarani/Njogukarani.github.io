<!DOCTYPE html>
<html>
<head>
	<title>PHP 101</title>
</head>
<body>
	<?php 
		echo "<h1>Hello World</h1>";
		echo "<h2>PHP Variables Rules</h2>";
		echo "<h3>Variable Rules</h3>
				<ol>
				<li> A variable must start with a dollar sign </li>
				<li> A variable name must start with either a letter or an underscore </li>
				<li> A variable name CANNOT start with a number but van contain a number </li>
				<li> A variable name is case sensitive</li> 
				</ol>
		";
		echo "<h2>PHP DATA TYPES</h2>";
		echo "<h4>Strings</h4>";
		//This is a single line comment 
		#Also a single line comment
		/*multi line 
		comment
		*/
		// a string is any sequence or characters inside quatation marks
		$stringOne  = "hi, i'm a string";
		echo "$stringOne";
		$name="Karani";
		echo "<b>Hi there i'm $name</b>" ;
		echo "<br>";
		$firstname="Dennis";
		$hobby="Playing Football";
		echo "Hi there,my name is " . $firstname. " and my hobby is " . $hobby;
		echo "<br>";
		echo "<h3>Integers</h3>";
		// an integer is any whole number'negative or positive 
		// without a decimal
		$int1=23;
		$int2=-23;
		$add=$int1+$int2;
		echo "The result of adding " .$int1 . "and " .$int2 . "is " .$add . "<br>";
		echo "<hr> <br> <h3>FLoats/Doubles</h3>";
		//A double or a float is any number with a decimal point
		$float=45.50;
		$double=65.60;
		echo "<br> <hr> <h3>Boolean</h3>";
		//A boolean represents two possible states and is used in logical operators
		$over18=false;
		if ($over18) {
			echo "<h2>Congrats, you can now partake</h2>";
		} else{
			echo "<h3>Buda saka masako</h3>";
		}
		$registered=false;
		if ($registered) {
			echo "Logging you in";
		} else{
			echo "Kindly Register";
		}
		echo "<hr> <br> <h3>Contants</h3>";
		//once you assign it you cannot reasign it
		$random=45;
		echo $random;
		$random="random String";
		echo $random;
		//constant variable
		define("ID", 2345);
		echo ID;
		define("id", 4567);
		echo id;
		echo "<hr> <br> <h1>Arrays</h1>";
		//An arrat is a special type of variable that allows you to store multiple values in a single variable
		//Indexed array
		$myClassMates=array("Bruce","Nicho","Enock","Gitau");
		print_r($myClassMates);
		echo "the value at position one is " . $myClassMates[0]; 
		echo "<br>";
		$mixedArray=["Dennis",18,"Football","Westlands"];
		echo "My Name is " . $mixedArray[0] . " and i'm " . $mixedArray[1] . " my hobby is " . $mixedArray[2] . " and i reside in " . $mixedArray[3];
		echo "<hr><br><h1>Excercise</h1>";
		$first=7;
		$second=19;
		$third=$first;
		$first=$second;
		$second=$third;
		echo "first " .$first . " second " .$second;

	 ?>

</body>
</html>