<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
</html>
<?php

session_start();
$ID=$_SESSION['Blood_Bank_ID'];

$con = mysqli_connect("localhost", "root", "");

// Check connection
if (!$con) {
   echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
	echo 'Database not selected'; 
}

$max=$_GET['max_patients'];
//$_SESSION['max_patients']=$max;

$val1=$_GET['val1'];
$val2=$_GET['val2'];
$val3=$_GET['val3'];
$val4=$_GET['val4'];
$val5=$_GET['val5'];
$val6=$_GET['val6'];
$val7=$_GET['val7'];

/*echo $val1;
echo $val2;
echo $val3;
echo $val4;
echo $val5;
echo $val6;
echo $val7;*/

$arr1 = explode (",", $val1);
$arr2 = explode (",", $val2);
$arr3 = explode (",", $val3);
$arr4 = explode (",", $val4);
$arr5 = explode (",", $val5);
$arr6 = explode (",", $val6);
$arr7 = explode (",", $val7);



$arr1=array_unique($arr1);
sort($arr1);
//print_r($arr1);

$i=0;
if(count($arr1)!=0)
{
	for($i=0;$i<count($arr1);$i++)
	{
		if($arr1[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Monday','$arr1[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr2=array_unique($arr2);
sort($arr2);
if(count($arr2)!=0)
{
	for($i=0;$i<count($arr2);$i++)
	{
		if($arr2[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Tuesday','$arr2[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr3=array_unique($arr3);
sort($arr3);
//print_r($arr3);

if(count($arr3)!=0)
{
	for($i=0;$i<count($arr3);$i++)
	{
		if($arr3[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Wednesday','$arr3[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr4=array_unique($arr4);
sort($arr4);
if(count($arr4)!=0)
{
	for($i=0;$i<count($arr4);$i++)
	{
		if($arr4[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Thursday','$arr4[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr5=array_unique($arr5);
sort($arr5);
//print_r($arr5);
if(count($arr5)!=0)
{
	for($i=0;$i<count($arr5);$i++)
	{
		if($arr5[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Friday','$arr5[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr6=array_unique($arr6);
sort($arr6);
if(count($arr6)!=0)
{
	for($i=0;$i<count($arr6);$i++)
	{
		if($arr6[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Saturday','$arr6[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

$arr7=array_unique($arr7);
sort($arr7);
if(count($arr7)!=0)
{
	for($i=0;$i<count($arr7);$i++)
	{
		if($arr7[$i]>0)
		{
		$query1="INSERT INTO blood_donation_slot_timings(Blood_Bank_ID,Day,Slots,Max_Patients) VALUES($ID,'Sunday','$arr7[$i]',$max)";
		if(!mysqli_query($con,$query1))
		{
			echo "Not inserted";
		}
		}
	}
}

header("refresh:0;url=blood_bank_login.html");
	
	

?>