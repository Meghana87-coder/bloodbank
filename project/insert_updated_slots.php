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
$slot=$_GET['val'];
$day=$_SESSION['updated_slot_day'];
//echo $slot;
//echo $day;

$arr=explode(",",$slot);
//print_r($arr);
//echo count($arr);
$arr=array_unique($arr);
sort($arr);


$query="SELECT * FROM blood_donation_slot_timings WHERE Blood_Bank_ID=$ID AND Day='$day'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	$query1="DELETE FROM blood_donation_slot_timings WHERE Blood_Bank_ID=$ID AND Day='$day'"; 
	if(mysqli_query($con,$query1))
	{
		echo 'Deletion success';
		
	}
	else
	{
		echo 'Deletion unsuccess';
	}
	
}


for($i=0;$i<count($arr);$i++)
{
	if($arr[$i]>0)
	{
$query2="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots) VALUES($ID,'$day','$arr[$i]')";
if(mysqli_query($con,$query2))
{
	echo 'Insert success';
}
else
{
	echo 'Insert not success';
}
}
}

header("refresh:1;url=blood_bank_options.html");

	
?>