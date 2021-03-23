<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<?php

session_start();
$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
    echo 'Database not connected';
}


$blood_bank_name=$_SESSION['Blood_Bank_Name'];
$blood_group=$_SESSION['Blood_Group'];
$quantity=$_SESSION['Quantity'];
$amount=$_SESSION['Amount'];

$ID=$_SESSION['Blood_Bank_ID'];
$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_ID=$ID";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
			$Blood_Bank_Name=$row['Blood_Bank_Name'];
		}
}
?>
<style>
  body{
    margin: 0;
    padding: 0;
 
   background-color: #eb5f55;
background-image: url("f.png");
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
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
table,tr {
	
	display:block;
	width:40%;
	height:50%;

	margin-left:auto;
	margin-right:auto;
	
}

td {
	color:black;
	font-size:25px;
	text-align:center;
	padding-top:10px;
}

.button {
   background-color: #800000; /* Blue */
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
a{
	text-align:right;
}
.div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
   
  <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
    <p style="float: right; position: absolute;right:180px;top:30px;font-size: 20px"><a href="index.php"><i class="fa fa-sign-out"></i>Log Out</i></a></p>
    <br><br><br><br></div><br><br><br></div>
<body>
	<body>
	<div class="bg-image"></div>
<div class="bg-text">
	 <h1 style="font-size:50px">ORDER BLOOD</h1>
    <i class="fa fa-quote-left fa-2x "></i>If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life.<i class="fa fa-quote-right fa-2x"></i>
</div>
<div class="login-box">

<h1> Ordered By&nbsp;:&nbsp;<?php echo $Blood_Bank_Name?></h1>
<h1>Ordered Date&nbsp;: <script>var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 
today = mm+'/'+dd+'/'+yyyy;
document.write(today);
</script>
<table>
<tr><td><h2><u>Ordered_Details</u></h2></td></tr>
<tr><td>Blood&nbsp;Bank&nbsp;Name&nbsp;:<?php echo '&nbsp;'.$blood_bank_name; ?></td></tr><br>
<tr><td>Blood&nbsp;Group&nbsp;:<?php echo '&nbsp;'.$blood_group;?></td></tr><br>
<tr><td>Quantity&nbsp;:<?php echo '&nbsp;'.$quantity.'&nbsp;units';?></td></tr><br>
<tr><td>Cost&nbsp;per&nbsp;unit&nbsp;blood&nbsp;:<?php echo '&nbsp;Rs.&nbsp;'.$amount/$quantity;?></td></tr><br>
<tr><td>Total&nbsp;Amount&nbsp;:<?php echo '&nbsp;Rs.&nbsp;'.$amount;?></td></tr>
</table>
<button class="button" onclick="window.print()" onclick="index.html" >Print Receipt</button><br><br>
<!--a href="index.html"><button class="button">LOGOUT</button></a><br><br-->
</div>
</body>
</html>