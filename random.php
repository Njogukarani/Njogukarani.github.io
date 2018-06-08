<!DOCTYPE html>
<html>
<head>
	<title>Random Quotes Generator</title>
</head>
<body>
	<h1>Generate a random quote every time the browser window is reloaded</h1>
	<?php 
		$quotes=[
			["author" => "Denno","text"=>"Jogoo ya kijijini haiwiki mjini"],
			["author" => "Manono","text"=>"Hayawi hayawi huwa"],
			["author" => "Karani","text"=>"Mgema akisifiwa tembo hulitia maji"],
			["author" => "Mike","text"=>"Mtaka cha mvunguni sharti ainame"],
			["author" => "Cedric","text"=>"Haraka haraka haina baraka"],
			["author" => "Ngatho","text"=>"Pole pole ndio mwendo"]
		];
		// echo rand(10,20);
		// echo "<pre>";
		// print_r($quotes);
		// echo "</pre>";
		$quote=$quotes[rand(0, count($quotes) - 1)];
		$quoteAuthor=$quote['author'];
		$quoteText=$quote['text'];
		

		//print_r($quote);

	 ?>
	 <blockquote>
	 	<h2> <?php echo $quoteText ?></h2>
	 	<strong><?php echo $quoteAuthor ?></strong>
	 </blockquote>
</body>
</html>