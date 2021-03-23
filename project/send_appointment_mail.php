<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>RAKTHA VEDHI</title>
</head>
<style>
	
	body{
    margin: 0;
    padding: 0;
    background-image:url(ap.jpg);
    background-size: 100%;
    background-position: center;
    font-family: sans-serif;
}
	
	h2{
	font-family: times new roman;
	font-size: 30px;
	color: :red;
}
p{
	font-family:Verdana;
	color:darkred;
	text-decoration: underline;
	font-size: 30px;}
	
h1{
	font-family: Verdana monospace;
	font-size: 30px;
}
.div2{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}
.button1:hover {
  background-color: darkred;
  color: white;
}
      </style>
   
  <div  class="div2"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
   
    <br><br><br><br></div><br><br><br></div>


<body>
	<center>
<h1 style="bottom: 240px;font-family:Times new Roman;color:darkred;font-size: 25px;"><i class="fa fa-quote-left fa-2x "></i>THANK YOU.YOU MADE IT. <br>WE ARE VERY PROUD OF YOU.EVERY PINT OF YOUR BLOOD WILL BE WORTH<i class="fa fa-quote-right fa-2x"></i></h1></center>

<div data-role="fieldcontain">
    <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain" style="width: 560px;position: absolute;left:380px; top:270px;">
    	<legend style="font-size: 30px;font-family: Comic Sans MS"><b>THANK YOU</b></legend>    



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

$slot=$_SESSION['slot'];
$date=$_SESSION['date_picker'];
$day=$_SESSION['day'];
$blood_bank_name=$_SESSION['blood_bank_name'];
 
$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_Name='$blood_bank_name'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
		$Blood_Bank_ID=$row['Blood_Bank_ID'];
}
//echo $Blood_Bank_ID;

echo "<h2>THANK YOU FOR TAKING APPOINMENT</h2>";
echo "<p>SELECTED DATE:</p>";
echo "<b>";
echo $date;
echo "</b>";
echo "<p>SELECTED DAY:</p>";
echo "<b>";
echo $day;
echo "<br> <br><br>";

$Donor_ID=$_SESSION['Donor_ID'];
$email="";

$query="SELECT * FROM donor_registration WHERE Donor_ID=$Donor_ID";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
	{
		$email= $row['Donor_Email'];
	}
}


if(isset($_POST['submit'])) {
	echo "";
	$query="INSERT INTO donors_per_slot(Blood_Bank_ID,Donor_ID,Date,Day,Slot) VALUES($Blood_Bank_ID,$Donor_ID,'$date','$day','$slot')";
	if(!mysqli_query($con,$query))
	{
		echo 'Not inserted';
	}

	//$mail=new PHPMailer();
	//$mail->IsSMTP();
	//$from="From:bloodbankonline66@gmail.com";
	$to=$email;
	$subject="Appointment Confirmed";
	$txt= "Your appointment is successfully booked on ".$date.", ".$day.", ".$slot." to donate blood in ".$blood_bank_name;
	if(mail($to,$subject,$txt))
	{
		echo "<h1>YOUR APPOINMENT IS SUCCESSFULL</h1>";
	}
	else
		echo "SORRY..! YOUR APPOINMENT IS NOT SUCCESSFULL.PLEASE CONTACT HELPLINE";
}
			
?>
<br>
<button class='button button1' onclick=window.location.href='index.php'>HOMEPAGE</button>

</fieldset>
</div>
</body>
</html>
