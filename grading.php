<?php 
 	$name="";
 	$name=$_POST['firstname'];
	$math=0;
	$math=$_POST['math'];
	$eng=0;
	$eng=$_POST['english'];
	$kis=0;
	$kis=$_POST['kiswahili'];
	$bio=0;
	$bio=$_POST['biology'];
	$chem=0;
	$chem=$_POST['chemistry'];
	$phyc=0;
	$phyc=$_POST['physics'];
	$hist=0;
	$hist=$_POST['history'];
	$total=$math+$eng+$kis+$bio+$chem+$phyc+$hist;
	$average=$total/7;
	$ave=number_format($average);
	
	echo "<h3>This are your grades</h3>
	<table border='2px solid black'>
		<tr>
			<th>Name</th>
			<th>Math</th>
			<th>Eng</th>
			<th>Kis</th>
			<th>Bio</th>
			<th>Chem</th>
			<th>Phyc</th>
			<th>Hist</th>
			<th>Average</th>
		</tr>
		<tr>
			<td>$name</td>
			<td>$math</td>
			<td>$eng</td>
			<td>$kis</td>
			<td>$bio</td>
			<td>$chem</td>
			<td>$phyc</td>
			<td>$hist</td>
			<td>$ave</td>
		</tr>
	</table>
";
	if ($average>88) {
		# code...
		echo "A";
	}elseif ($average>81) {
		# code...
		echo "A-";
	}elseif ($average>77) {
		# code...
		echo "B+";
	}elseif ($average>74) {
		# code...
		echo "B";
	}elseif ($average>69) {
		# code...
		echo "B-";
	}elseif ($average>62) {
		# code...
		echo "C+";
	}elseif ($average>57) {
		# code...
		echo "C";
	}elseif ($average>50) {
		# code...
		echo "C-";
	}elseif ($average>45) {
		# code...
		echo "D+";
	}elseif ($average>40) {
		# code...
		echo "D";
	}elseif ($average>35) {
		# code...
		echo "D-";
	}else{
		echo "E";
	}
 ?>