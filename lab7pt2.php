<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title></title>
 </head>
 <body>
<?php
 $con = mysqli_connect('localhost', 'root', '', 'firmatan1') or die(mysqli_connect_error());
 $querySt="SELECT * FROM Bachkatori";
 $dbStRecords=mysqli_query($con,$querySt) or
 die('Неуспешно запитване. Получи следната грешка'.mysqli_error($con));
?>
 <form method="post" action="lab7pt2.php">
Vuvedete zaplata<br>
<input type="text" name="zaplata" />
 <input type="submit" name="submit" value="OK">
 </form>
 </body>
 </html>
 <?php
 if(isset($_POST['submit'])){
	 $nom=$_POST['zaplata'];
$querySt="SELECT name, zaplata FROM Bachkatori WHERE zaplata > $nom";
$dbStRecords=mysqli_query($con,$querySt) or
die ('Неуспешно запитване. Получи се следната грешка'.mysqli_error($con));
while($StRecords=mysqli_fetch_array($dbStRecords)){
 echo $StRecords["name"]." | ";
 echo $StRecords["zaplata"]."<br>";
}
 }

?>