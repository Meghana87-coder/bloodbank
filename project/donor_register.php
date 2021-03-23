<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<html>
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


$Donor_Name=$_POST['Donor_Name'];
$username=$_POST['username'];
$password=$_POST['password'];
$age=$_POST['Age'];
$PhoneNo=$_POST['PhoneNo'];
$Email=$_POST['Email'];

 $sql = "SELECT * FROM donor_registration WHERE Donor_Name='$Donor_Name'";
 $result=mysqli_query($con,$sql); 

  if(mysqli_num_rows($result) > 0) {
     echo '<script>alert("Donor Name already exists")</script>';
    header("refresh:0;url=donor_register.html");

  }
  else {



$query ="INSERT INTO donor_registration(Donor_Name,username, password, Donor_Age,Donor_PhoneNo,Donor_Email)
VALUES ('$Donor_Name','$username', '$password', $age, $PhoneNo, '$Email' )";



if (mysqli_query($con,$query)) 
{
   $Donor_ID = mysqli_insert_id($con);
   // echo "Reference ID: " . $last_id;
   $_SESSION['Donor_ID']=$Donor_ID;
     header("refresh:0;url=donor_login.html");
//$_SESSION['id']=$last_id;


} 
else 
{
    echo 'Signup Not Inserted';
}

}


mysqli_close($con);
?> 