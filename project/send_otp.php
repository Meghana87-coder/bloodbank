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

//$card_no="";
$flag=0;
$ID=$_SESSION['Blood_Bank_ID'];

	
if(isset($_POST['btn']))
 {
	$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_ID=$ID";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
	{
		$email=$row['Blood_Bank_Email'];
	}
}


$otp=rand(1000,9999);
$_SESSION['sent_otp']=$otp;
$to=$email;
	$subject="OTP";
	$txt= "Your OTP is ".$otp;
	if(mail($to,$subject,$txt))
	{
		//echo "OTP has been sent to registered Email ID<br><br>";
		$flag=1;
	}
	else
	{
		echo "Not Success";
		
	}
	
	//$card_no=$_POST['card_no'];
	//echo $card_no;
}

	//echo $card_no;

if(isset($_POST['submit']))
	{	
		$sent_otp=$_SESSION['sent_otp'];
		$otp=$_POST['otp'];

		if($otp==$sent_otp)
		{
			$flag=3;
			//echo $card_no;
			/*echo "<h2>Successfully you have completed the payment<br><br>";
			echo "Click on Proceed to print the receipt</h2><br><br>";
			echo "<button class='button button1' onclick=window.location.href='print_receipt.php'>Proceed</button>";*/
		}	
	
		else
		{
			$flag=2;
			//echo $card_no;
			//echo "Sorry you entered wrong OTP";
		}
		
	//$card_no=$card;
	}
?>
<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.bg-image {
  /* The image used */
  background-image: url("or.jpg");
  
  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:repeat;
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
input[type=number] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}
.div1{
	background-color: white;
  width: 300px;
  
  border: 10px solid green;
  padding: 30px;
  margin: 20px;
  opacity: 0.8;
}
.div2{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
   
  <div  class="div2"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
    <p style="float: right; position: absolute;right:180px;top:30px;font-size: 20px"><a href="index.html"><i class="fa fa-sign-out"></i>Log Out</i></a></p>
    <br><br><br><br></div><br><br><br></div>


<body>
	<div class="bg-image"></div>

<center>
<form name="send_otp" method="post">
	

		<br>
		 <div class="div1"  style="width: 560px;position: absolute;right:340px;top: 215px;">
		 	<h1> 2 STEP VERIFICATION PAGE</h1>
		 	<p> We ensure your safety for your payment</p>
		 	<img src="otp.png">
    	 
	
<br><button name="btn" >Send OTP</button><br><br>
<?php 
if($flag==1)
	echo "OTP has been sent to registered Email ID<br><br>";

?>
<input type="number" name="otp" placeholder="Enter OTP:" />
<br><br><button class="button button1"  name="submit">Submit</button><br><br>
<?php
if($flag==2)
	echo "Sorry you entered wrong OTP";
	?>
	</div>
</form>

<?php
if($flag==3)
		{
			echo "<br>";
			echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Successfully you have completed the payment<br><br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click on Proceed to print the receipt</h2><br><br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='button button1' onclick=window.location.href='print_receipt.php'>Proceed</button>";
		}
		?>
		

</body>
</html>




