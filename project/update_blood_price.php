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
if(isset($_POST['submit']))
{
$Apos_cost=$_POST['A+_cost'];
$Bpos_cost=$_POST['B+_cost'];
$Opos_cost=$_POST['O+_cost'];
$ABpos_cost=$_POST['AB+_cost'];
$Aneg_cost=$_POST['A-_cost'];
$Bneg_cost=$_POST['B-_cost'];
$Oneg_cost=$_POST['O-_cost'];
$ABneg_cost=$_POST['AB-_cost'];


$query1="UPDATE stock_cost SET Cost=$Apos_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='A+'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$Bpos_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='B+'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$Opos_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='O+'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$ABpos_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='AB+'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$Aneg_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='A-'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$Bneg_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='B-'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$Oneg_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='O-'";
mysqli_query($con,$query1);
$query1="UPDATE stock_cost SET Cost=$ABneg_cost WHERE Blood_Bank_ID=$ID AND Blood_Group='AB-'";
mysqli_query($con,$query1);

//echo '<script>alert("Updated Successfully")</script>';
header("refresh:0;url=blood_bank_options.html");
}
?>




<html><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.button {
   background-color: #800000; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin-left: 400px;
  cursor: pointer;
  width:150px;
    height: 40px;
    border-radius: 20px;
}
 img{
  position: absolute;
  top:50%;
  opacity: 1;
}

body{
    margin: 0;
    padding: 0;
    background: url(bck.jpg);
    background-size: 100%;
    background-position: center;
    font-family: sans-serif;
    opacity: 1;


}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 14px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover {
background-color:red;
}

.buttonS {
  background-color: white; 
  color: black; 
  border: 2px darkred;
}

.buttonS:hover {
  background-color: #f44336;
  color: white;
}
.bg-image {
  /* The image used */
  background-image: url("bag.jpg");
  
  /* Add the blur effect */

  /* Full height */
  height: 70%; 
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
   <script>
   function fun()
   {
   alert("Updated Successfully");
   }
   </script>
  <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
    <!--p style="float: right; position: absolute;right:180px;top:30px;font-size: 20px"><a href="index.php"><i class="fa fa-sign-out"></i>Log Out</i></a></p-->
    <br><br><br><br></div><br><br><br></div>


  
   <div class="bg-image"></div>
<div class="bg-text">
     <h1 style="font-size:50px">UPDATE BLOOD PRICE</h1>
    <p>"If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life."</p>
</div>
<br>
<center>

<form name="update_blood_price" action="update_blood_price.php" onsubmit="fun()" method="post">
<table>
<tr><td>A+</td><td><input type="number" placeholder="Enter A+ price" name="A+_cost"required /></td></tr>
<tr><td>B+</td><td><input type="number" placeholder="Enter B+ price" name="B+_cost"required /></td></tr>
<tr><td>O+</td><td><input type="number" placeholder="Enter O+ price" name="O+_cost"required /></td></tr>
<tr><td>AB+</td><td><input type="number" placeholder="Enter AB+ price" name="AB+_cost"required /></td></tr>
<tr><td>A-</td><td><input type="number" placeholder="Enter A- price" name="A-_cost"required /></td></tr>
<tr><td>B-</td><td><input type="number" placeholder="Enter B- price" name="B-_cost"required /></td></tr>
<tr><td>O-</td><td><input type="number" placeholder="Enter O- price" name="O-_cost"required /></td></tr>
<tr><td>AB-</td><td><input type="number" placeholder="Enter AB- price" name="AB-_cost"required /></td></tr>
</table>
</center>
<input type="submit" name="submit" class="button" value="SUBMIT" style="margin-left:40%;"></input></form>
<button class="button" name="cancel" onclick="window.location.href='blood_bank_options.html';">CANCEL</button>
</body>
</html>
