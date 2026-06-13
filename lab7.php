<?php

 $con = mysqli_connect('localhost', 'root', '', 'firmatan1') or die(mysqli_connect_error());


 $querySt="SELECT * FROM Bachkatori";

 $dbStRecords=mysqli_query($con,$querySt) or
 die('Неуспешно запитване. Получи следната грешка'.mysqli_error($con));


 while($StRecords=mysqli_fetch_array($dbStRecords))
 { 
 echo $StRecords["fnom"]." | ";
 echo $StRecords['name']." | ";
 echo $StRecords['poziciq']." | ";
 echo $StRecords['zaplata']."<br>";
 }

 mysqli_close($con);
 ?>
 


<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title></title>
 </head>
 <body>
<?php
 $con = mysqli_connect('localhost', 'root', '', 'firmatan1') or die(mysqli_connect_error());
 $querySt="SELECT fnom FROM Bachkatori";
 $dbStRecords=mysqli_query($con,$querySt) or
 die('Неуспешно запитване. Получи следната грешка'.mysqli_error($con));
?>
 <form method="post" action="lab7.php">
Molq izberi ime<br>
 <select name="nom">
 <?php
While ($StRecords=mysqli_fetch_array($dbStRecords))
 {
 ?>
<option value="<?php echo $StRecords["fnom"]; ?>"><?php echo
$StRecords["fnom"];?></option>
 <?php
}
 ?>
 </select>
 <input type="submit" name="submit" value="OK">
 </form>
 </body>
 </html>
 <?php
 if(isset($_POST['submit'])){
	 $nom=$_POST['nom'];
$querySt="SELECT name, poziciq FROM Bachkatori WHERE fnom=$nom";
$dbStRecords=mysqli_query($con,$querySt) or
die ('Неуспешно запитване. Получи се следната грешка'.mysqli_error($con));
if($StRecords=mysqli_fetch_array($dbStRecords)){
 echo $StRecords["name"]." | ";
 echo $StRecords["poziciq"]."<br>";
}
 }

?>









