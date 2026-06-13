<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title></title>
 </head>
 <body>
<form action="lab6.php" method="post">
Въведи nomer na bachkatora: <input type="text" name="fnom" />
Име: <input type="text" name="name" />
Poziciq: <input type="text" name="poz" />
Zaplata: <input type="text" name="zaplata" />
<input type="submit" name="submit"/>
</form>
</body>
 </html>
<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root", "")or die(mysqli_connect_error());
echo "BazataDanni bachka<br>";
//$sql="CREATE DATABASE FirmataN1";
mysqli_select_db($con, "FirmataN1");
echo "Izbra Firma Nomer 1 BD<br>";

//$sql ="CREATE TABLE Bachkatori( fnom INT(10) NOT NULL, name VARCHAR(32),
//poziciq VARCHAR(32), zaplata DOUBLE (8,2), PRIMARY KEY (fnom) ) DEFAULT CHARSET=utf8";
 //mysqli_query( $con, $sql );
 //echo "Tablicata e uspeshno suzdadena<br>"; 

$num=$_POST['fnom'];
$ime=$_POST['name'];
$poz=$_POST['poz'];
$zapl=$_POST['zaplata'];

$sql="INSERT INTO Bachkatori (fnom, name, poziciq, zaplata) VALUES ('$num', '$ime', '$poz', '$zapl')";
mysqli_query($con, $sql) or die(mysqli_error($con));
echo "1 nov zapis"; mysqli_close($con);


}

 ?>