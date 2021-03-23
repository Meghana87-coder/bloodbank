<html>
<head>
<title>RAKTHA VEDHI</title>
<script type="text/javascript">
function fun()
{

	var a = document.forms["change_password"]["new_password"].value; 
	var b = document.forms["change_password"]["confirm_password"].value; 
	 var n = a.localeCompare(b);
	 if(n!=0)
	{
		alert("Enter the same password");
		return false;
	}
	else
	{
		alert("New Password is Updated Successfully");
	}

}
</script>
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

</head>
<img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:40px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
<body>

<h1 style="margin-left:550px;
	margin-top:200px;">Change Password?</h1>
<div class="container">
<form name="change_password"  onsubmit="return fun()" method="post">
Enter New Password: <input type="password" name="new_password" required /><br><br><br>
Confirm New Password: <input type="password" name="confirm_password" required /><br><br><br>
<input type="submit" name="submit" value="SUBMIT" style="margin-left:70px;" required ></input>
<input type="button" name="cancel" value="CANCEL" style="margin-left:70px;" onclick="window.location.href='donor_login.html'" required ></input>
</form>
</div>
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
	$ID=$_SESSION['Blood_Bank_ID'];
	$new=$_POST['new_password'];
		$query1="UPDATE blood_bank_registration SET password='$new' WHERE Blood_Bank_ID=$ID";
			if(mysqli_query($con,$query1))
			{
				//echo "Success";
				header("refresh:0;url=blood_bank_options.html");
			}
			else
			{
				echo "Not success";
			}
}
?>
</body>
</html>
