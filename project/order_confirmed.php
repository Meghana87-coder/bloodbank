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
$Ordered_Blood_Bank_ID=$_SESSION['Ordered_Blood_Bank_ID'];
$blood_group=$_SESSION['Blood_Group'];
$quantity=$_SESSION['Quantity'];

$update="UPDATE stock_cost SET Stock=Stock-$quantity WHERE Blood_Bank_ID=$Ordered_Blood_Bank_ID AND Blood_Group='$blood_group'";
	mysqli_query($con,$update);
	
$update="UPDATE stock_cost SET Stock=Stock+$quantity WHERE Blood_Bank_ID=$ID AND Blood_Group='$blood_group'";
	mysqli_query($con,$update);
?>

<html>
<style>
.button {
   background-color: #800000; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin-left:  600px;
  cursor: pointer;
  width:300px;
    height: 40px;
    border-radius: 20px;
}
.bg-image {
  /* The image used */
  background-image: url("or.jpg");
  
  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 50%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

.div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
   
  <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
    <p style="float: right; position: absolute;right:180px;top:30px;font-size: 20px"><a href="index.html"><i class="fa fa-sign-out"></i>Log Out</i></a></p>
    <br><br><br><br></div><br><br><br></div>
<body>
	<div class="bg-image"></div>
<div class="bg-text">
	 <h1 style="font-size:50px">ORDER BLOOD</h1>
    <p>"If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life."</p>
</div>
<body></body>
<center>
<h1>Thanks For Ordering</h1>
<h1>Your order is successfully submitted</h1>
<h1>Please click Payment button for further process..!!!</h1>
<button class="button" name="proceed" onclick="window.location.href='payment.html';">PAYMENT</button>
</body>
</html>