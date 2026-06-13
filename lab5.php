<html>
 <body>
<h2> Please enter your personal details:</h2>
<form action='<?php echo $_SERVER["PHP_SELF"]?>' method='post'>
 <p>
<label for="strFirstName">Firstname</label>
<input type="text" name="strFirstName" id="strFirstName"/>
 </p>
 <p>
<label for="strSurName">Surname</label>
<input type="text" name="strSurName" id="strSurName"/>
 </p>
 <p>
<label for="strUserName">Username</label>
<input type="text" name="strUserName" id="strUserName"/>
 </p>
 <p>
<label for="strEmail">Email</label>
<input type="email" name="strEmail" id="strEmail"/>
 </p>
 <p>
<label for="strPassword">Password</label>
<input type="password" name="strPassword" id="strPassword"/>
 </p>
 <p>
<label for="date">My Birthday is</label>

<select id="date" name="dated">
 <?php for($i=1;$i<32;$i++){ ?>
<option value="<?php echo $i;?>">
<?php echo $i;?>
</option>
 <?php } ?>
</select>

<select id="date" name="datem">
 <?php for($i=1;$i<13;$i++){ ?>
<option value="<?php echo $i;?>">
<?php echo $i;?></option>
 <?php } ?>
</select>

<select id="date" name="datey">
 <?php for($i=2000;$i<2100;$i++){ ?>
<option value="<?php echo $i;?>"><?php echo $i;?>
</option>
 <?php }  ?>
</select>

 </p>
 <p>
<label for="gender">My gender is</label>
<input type="radio" name="gender" id="gender" value="male"/>
male
<input type="radio" name="gender" id="gender" value="female"/>
female
 </p>
 <p>
<input type="submit" name="Submit"/>
 </p>
</form>
 </body>
</html>
<?php
if(isset($_POST['Submit'])){
$strFirstName=$_POST['strFirstName'];
$strSurName=$_POST['strSurName'];
$strUserName=$_POST['strUserName'];
$strPassword=$_POST['strPassword'];
$strEmail=$_POST['strEmail'];
$Gender=$_POST['gender'];
$Byear=$_POST['datey'];
$Bmonth=$_POST['datem'];
$Bday=$_POST['dated'];
echo "<p>Greatings $strFirstName $strSurName</p>";
echo "<p>Your B-day is $Bday $Bmonth $Byear and you gender is $Gender</p>";
echo"<p>Your username is $strUserName and your email is $strEmail and your password is $strPassword</p>";
}
?>

<html>
 <body>
<form action='<?php echo $_SERVER["PHP_SELF"]?>' method='post'>
<input type="number" name="Duljina"/>
<input type="number" name="Shirina"/>
<input type="submit" name="Submit"/>
</form>
</body>
</html>

<?php
if(isset($_POST['Submit'])){
$strFirstName=$_POST['Duljina'];
$strSurName=$_POST['Shirina'];
echo "<p>Duljinata e: $strFirstName Shirinata e: $strSurName</p>";
echo "Liceto e: "; echo $strFirstName * $strSurName;
}
?>
