<?php
require "lab1.php";

if($intNumber>$strNumber) echo "<p>$intNumber is larger than $strNumber</p>";
elseif ($intNumber==$strNumber) echo "<p>$intNumber is equal to $strNumber</p>";
else echo "<p>$intNumber is small than $strNumber</p>";
?>

<?php
 for($i=1;;$i++){
	 
    if(($i & 1) == 0) print $i."<br>";
	if($i == 10) break;
 }

?>

<?php
$i = 0;
$j = 2;
while($i < 10) {

	$i++;
	echo "<br> $i * $j = ";  
	echo $i * $j;
	
}


?>