<html>

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



$Ordered_Blood_Bank_ID=$_GET['Blood_Bank_ID'];
$quantity=$_GET['quantity'];
$blood_group=$_GET['blood_group'];
$_SESSION['Ordered_Blood_Bank_ID']=$Ordered_Blood_Bank_ID;

$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_ID=$Ordered_Blood_Bank_ID";
$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
	$blood_bank_name=$row['Blood_Bank_Name'];
		}
}
else
{
	echo 'Not Available';
}
$amount=1;
$query1="SELECT * FROM stock_cost WHERE Blood_Bank_ID=$Ordered_Blood_Bank_ID AND Blood_Group='$blood_group'";
$result1=mysqli_query($con,$query1);
	if(mysqli_num_rows($result1) > 0) {
		
		while($row = mysqli_fetch_array($result1)) {
	$amount=$row['Cost']*$quantity;
		}
	
		
}
else
{
	
	echo 'Not available';
	
	
}

//echo $ID;
//echo $blood_group;
//echo $quantity;
?>

<style>
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
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}


</style>
<div class="bg-image"></div>
<div class="bg-text">
	 <h1 style="font-size:50px">ORDER BLOOD</h1>
    <p>"If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life."</p>
</div>
<center>
<body>
<table>
<tr><td><h2><u>Confirm&nbsp;Ordered&nbsp;Details</u></h2></td></tr>
<tr><td>Blood&nbsp;Bank&nbsp;Name&nbsp;:&nbsp;<?php echo $blood_bank_name; $_SESSION['Blood_Bank_Name']=$blood_bank_name;?></td></tr><br>
<tr><td>Blood&nbsp;&nbsp;Group&nbsp;:&nbsp;<?php echo $blood_group;$_SESSION['Blood_Group']=$blood_group;?></td></tr><br>
<tr><td>Quantity&nbsp;:&nbsp;<?php echo $quantity.'&nbsp;units';$_SESSION['Quantity']=$quantity;?></td></tr><br>
<tr><td>Amount&nbsp;per&nbsp;unit&nbsp;of&nbsp;blood&nbsp;:&nbsp;<?php echo '&nbsp;Rs.'.$amount/$quantity;?></td></tr><br>
<tr><td><div>Total&nbsp;Amount&nbsp;:&nbsp;<?php echo '&nbsp;Rs.'.$amount;$_SESSION['Amount']=$amount;?></td></tr>
</table>


<button class="button" name="confirm" onclick="window.location.href='order_confirmed.php';">Confirm</button>
<button class="button" name="cancel" style="background-color: red;"  onclick="window.location.href='order_blood.html';">Cancel</button>
</center>
</body>
</html>