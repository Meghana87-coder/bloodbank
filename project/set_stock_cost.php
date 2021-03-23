<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
</html>
<?php
session_start();
$con = mysqli_connect("localhost", "root", "");

// Check connection
if (!$con) {
   echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
	echo 'Database not selected'; 
}


$ID=$_SESSION['Blood_Bank_ID'];
$Apos_stock=$_POST['A+_stock'];
$Apos_cost=$_POST['A+_cost'];
$Bpos_stock=$_POST['B+_stock'];
$Bpos_cost=$_POST['B+_cost'];
$Opos_stock=$_POST['O+_stock'];
$Opos_cost=$_POST['O+_cost'];
$ABpos_stock=$_POST['AB+_stock'];
$ABpos_cost=$_POST['AB+_cost'];
$Aneg_stock=$_POST['A-_stock'];
$Aneg_cost=$_POST['A-_cost'];
$Bneg_stock=$_POST['B-_stock'];
$Bneg_cost=$_POST['B-_cost'];
$Oneg_stock=$_POST['O-_stock'];
$Oneg_cost=$_POST['O-_cost'];
$ABneg_stock=$_POST['AB-_stock'];
$ABneg_cost=$_POST['AB-_cost'];

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Apos_stock,$Apos_cost,'A+')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}


$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Bpos_stock,$Bpos_cost,'B+')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Opos_stock,$Opos_cost,'O+')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}
$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$ABpos_stock,$ABpos_cost,'AB+')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Aneg_stock,$Aneg_cost,'A-')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Bneg_stock,$Bneg_cost,'B-')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$Oneg_stock,$Oneg_cost,'O-')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

$sql="INSERT INTO stock_cost(Blood_Bank_ID,Stock,Cost,Blood_Group) VALUES($ID,$ABneg_stock,$ABneg_cost,'AB-')";
if(!mysqli_query($con,$sql))
{
	echo ' Not Inserted';

}

header("refresh:0;url=set_blood_donation_timings.html");

mysqli_close($con);
?>
