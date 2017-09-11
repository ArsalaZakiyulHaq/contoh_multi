<!DOCTYPE html>
<html>
<body>
<h4>2. xample of the second multidimensi array :</h4>

<?php
$person = array
	(
	array("Budi" ,"age :","twenty years old"),
	array("Sudirman" ,"age :","one hundred years old"),
	array("Jendral" ,"age :","five hundred years old"),
	array("Pungo" ,"age :","one thousand years old")
	);
	
for ($row = 0; $row < 4; $row++) {
	echo "<h4>Information : $row</h4>";
	echo "<rl>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$person[$row][$col]."</li>";
	}
	echo "</rl>";
	}
?>
</body>
</html>