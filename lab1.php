<?php
define( "Author", "Simon
Stibar");

echo "Imeto na avtora e: ".Author;
?>
<?php
$intNumber=100;
$strNumber="80";
$num = 8;
echo "<br>Value is now $num.";
//$num = $num + 2;
echo"<BR>Add 2. Value is now ".$num += 2;
$num = $num - 4;
echo"<BR>Subtract 4. Value is now $num.";
$num = $num * 5;
echo" <br>Multiply by 5. Value is now $num.";
$num = $num / 3;
echo"<br>Divide by 3. Value is now $num.";
echo"<br>Increment value by one.Value is now ".++$num;
echo"<br>Decrement value by one. Value is now ".--$num;
?>