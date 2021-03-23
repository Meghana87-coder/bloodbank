<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
</html>
<?php

session_start();
// Create connection
//echo 'in php code ';
$con = mysqli_connect("localhost", "root", "");

// Check connection
if (!$con) {
   echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
	echo 'Database not selected'; 
}


$Blood_Bank_Name=$_POST['Blood_Bank_Name'];
$username=$_POST['username'];
$password=$_POST['password'];
$PhoneNo=$_POST['PhoneNo'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];

 $sql = "SELECT * FROM blood_bank_registration WHERE Blood_Bank_Name='$Blood_Bank_Name'";
  $result=mysqli_query($con,$sql); 
  
  if(mysqli_num_rows($result) > 0) {
    echo '<script>alert("Blood Bank Name already exists")</script>';
    header("refresh:0;url=blood_bank_register.html");

  }
  else {



$query ="INSERT INTO blood_bank_registration(Blood_Bank_Name,username, password, Blood_Bank_PhNo, Blood_Bank_Email, Blood_Bank_Address)
VALUES ('$Blood_Bank_Name','$username', '$password', $PhoneNo, '$Email', '$Address')";



if (mysqli_query($con,$query)) 
{
    $Blood_Bank_ID = mysqli_insert_id($con);
   // echo "Reference ID: " . $Blood_Bank_ID;
     header("refresh:0;url=set_stock_cost.html");
$_SESSION['Blood_Bank_ID']=$Blood_Bank_ID;


} 
else 
{
    echo 'Signup Not Inserted';
}

}


mysqli_close($con);
?> 