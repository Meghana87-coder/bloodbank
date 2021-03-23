<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<style >
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


.buttonS {
  background-color: #4CAF50; 
  color: black; 
  border: 2px solid black;
}

.buttonS:hover {
  background-color: #f44336;
  color: white;
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


	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
th{
	background-color: 
}

tr:hover {background-color:#FF9966;
 
}
.div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
      <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:30px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
  
    <br><br><br><br></div><br><br><br></div>
<div class="bg-image"></div>
<div class="bg-text">
	 <h1 style="font-size:50px">ORDER BLOOD</h1>
    <p>SELECT ANYONE OF THE BLOOD BANK AND ORDER IT ACCORDINGLY</p>
</div>
<body></body>
<center>



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
$blood_group=$_POST['blood_groups'];
$quantity=$_POST['quantity'];

$sql="SELECT * FROM blood_bank_registration WHERE Blood_Bank_ID in (SELECT Blood_Bank_ID FROM stock_cost WHERE Blood_Group='$blood_group' AND Blood_Bank_ID!=$ID AND Stock>$quantity)";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0) {
	echo "<h1>Blood Group ".$blood_group;echo"<br>";echo"<br>";
	 echo"AVAILABLE BLOOD BANKS ARE:";echo"<br>";
echo "<table border='1'>

<th>Blood Bank Name</th>
<th>Blood Bank Phone No</th>
<th>Blood Bank Email</th>
<th>Blood Bank Address</th>
";

	while($row = mysqli_fetch_array($result)) {
		
		echo '<tr><style="font-size:50px">
		<td>' .$row['Blood_Bank_Name'] . '</td>
		<td>' .$row['Blood_Bank_Phno'] . '</td>
		<td>' .$row['Blood_Bank_Email'] . '</td>
		<td>' .$row['Blood_Bank_Address'] . '</td>
		

		<td><a href="order_details.php?Blood_Bank_ID='.$row['Blood_Bank_ID'].'&amp;quantity='.$quantity.'&amp;blood_group='.urlencode($blood_group).'">Order Now</a></td>';
		echo '</style></tr>';
	}
	echo '</table>';	
	echo '<br><button class="button buttonS" name="cancel" onclick=window.location.href="order_blood.html";>CANCEL</button>';
}
else
{
	echo 'Not Available';
	header("refresh:3;url=order_blood.html");
}
?>