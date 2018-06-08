<!DOCTYPE html>
<html>
<head>
	<title>Kusoma School</title>
	<style type="text/css">
		body{
			background-color: #ffb3b3;
			font-family: sans-serif;
			font-size: 23px;"
					
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body style="background-color: #ffb3b3;
			font-family: sans-serif;
			font-size: 23px;"
					">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand"></a>
			</div>
			<ul class="nav navbar-nav" style="list-style-type: none;padding: 10px;">
				<a href="index.php">Home</a>
				<a href="#">About Us</a>
				<a href="#">Contact Us</a>
				<a href="#" class="active">Grades</a>
			</ul>
		</div>
	</nav>
	<div style="text-align: center;">
		<img src="black-wheat-and-mortarboard.png" class="img-circle" style="float: center;">
	</div>
	<h1 style="text-align: center;">School Grading System</h1>
		<form action="grading.php" method="POST" style="text-align: center;">
			<label>First Name</label><br>
			<input type="text" name="firstname" placeholder="First Name" required=""><br>
			<label>Surname</label><br>
			<input type="text" name="surname" placeholder="Surname" required=""><br>
			<label>Mathematics</label><br>
			<input type="text" name="math" placeholder="Enter Marks Here"><br>
			<label>English</label><br>
			<input type="text" name="english" placeholder="Enter Marks here"><br>
			<label>Kiswahili</label><br>
			<input type="text" name="kiswahili"><br>
			<label>Biology</label><br>
			<input type="text" name="biology" placeholder="Enter Marks Here"><br>
			<label>Chemistry</label><br>
			<input type="text" name="chemistry" placeholder="Enter Marks Here"><br>
			<label>Physics</label><br>
			<input type="text" name="physics" placeholder="Enter Marks Here"><br>
			<label>History</label><br>
			<input type="text" name="history" placeholder="Enter Marks Here"><br>
			<input type="submit" value="submit"><input type="reset" value="reset">

		</form>
		

		</footer>

</body>
</html>