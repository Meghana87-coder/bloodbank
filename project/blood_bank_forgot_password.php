<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<style>

body{
  background: #e9eaea;
  font-family: roboto;
  
}
.container{
  background: #fff;
  width: 400px;
  margin-top: 30px;
  margin-left:450px;
  height: 150px;
  padding-top:50px;
  padding-left:50px;
}

</style>
<img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:40px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
<body>
<h1 style="margin-left:550px;
	margin-top:200px;">Forgot Password?</h1>
<div class="container">
<form name="forgot_password" method="post">
Please enter your mail: <input type="email" name="email" required /><br><br><br>
<input type="submit" name="submit" value="SUBMIT" style="margin-left:70px;" required ></input>
<input type="button" name="cancel" value="CANCEL" style="margin-left:70px;" onclick="window.location.href='donor_login.html'" required ></input>
</form>
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

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_Email='$email'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		$string1="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

		$string2="1234567890";

		$string3="!@#$^&*_";

		$string=$string1.$string2.$string3;

		$string= str_shuffle($string);
		$password=substr($string,0,8);
		$to=$email;
		$subject="New Password";
		$txt= "New password: ".$password;
		if(mail($to,$subject,$txt))
		{
			echo "<h1>YOUR PASSWORD HAS BEEN SENT TO MAIL-ID</h1>";
			$query1="UPDATE blood_bank_registration SET password='$password' WHERE Blood_Bank_Email='$email'";
			if(mysqli_query($con,$query1))
			{
				echo "Success";
			}
			else
			{
				echo "Not success";
			}
		}
		else
			echo "SORRY..!";
	}
	else
	{
		echo "SORRY YOUR EMAIL-ID IS NOT REGISTERED";
	}
}

?>
</div>
</body>
</html>