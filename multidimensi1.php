<!DOCTYPE html>
<html>
<body>
<h2><u>MULTIDIMENSI :</u></h2>
<h4>1. xample of the firts multidimensi array :</h4>
<?php
$park = array
	(
	array("Shalimar Garden" ,2,4,),
	array("The Kew Garden" ,3,2),
	array("Butchart Gardens" ,1,1),
	array("Versailles" ,4,3)
	);
	
echo $park[0][0]." : beauty : ".$park[0][1].", cleanliness : ".$park[0][2].",
<br>";
echo $park[1][0]." : beauty : ".$park[1][2].", cleanliness : ".$park[1][2].",
<br>";
echo $park[2][0]." : beauty : ".$park[2][2].", cleanliness : ".$park[2][2].",
<br>";
echo $park[3][0]." : beauty : ".$park[3][1].", cleanliness : ".$park[3][2].".
<br>";
?>

</body>
</html>