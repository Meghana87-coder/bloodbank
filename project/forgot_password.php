<html>
<body>
<form name="forgot_password" method="post">
Please enter your mail: <input type="email" name="email" required /><br>
<input type="submit" name="submit" value="SUBMIT" required ></input>
</form>
<input type="button" name="cancel" value="CANCEL" onclick="window.location.href='donor_login.html'" required ></input>

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
	$query="SELECT * FROM donor_registration WHERE Donor_Email='$email'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		$string1="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

		$string2="1234567890";

		$string3="!@#$%^&*()_+";

		$string=$string1.$string2.$string3;

		$string= str_shuffle($string);
		$password=substr($string,0,8);
		$to=$email;
		$subject="New Password";
		$txt= "New password: ".$password;
		if(mail($to,$subject,$txt))
		{
			echo "<h1>YOUR PASSWORD HAS BEEN SENT TO MAIL-ID</h1>";
			$query1="UPDATE donor_registration SET password='$password' WHERE Donor_Email='$email'";
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
</body>
</html>