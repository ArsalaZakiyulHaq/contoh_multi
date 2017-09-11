<!DOCTYPE html>
<html>
<body>
<h4>3. xample of the third multidimensi array :</h4>

<?php
$ship = array
	(
	array("Kapal Baque Sedov" ,65,304),
	array("Kapal Kayu Pinisi" ,540,520),
	array("Kapal Preussen" ,1000,400),
	array("Kapal Juan Elcano" ,50,235)
	);
	
echo $ship[0][0].": weight : ".$ship[0][1].", hight : ".$ship[0][2].".
<br>";
echo $ship[1][0].": weight : ".$ship[1][1].", hight : ".$ship[1][2].".
<br>";
echo $ship[2][0].": weight : ".$ship[2][1].", hight : ".$ship[2][2].".
<br>";
echo $ship[3][0].": weight : ".$ship[3][1].", hight : ".$ship[3][2].".
<br>"; 
?>

</body>
</html> 