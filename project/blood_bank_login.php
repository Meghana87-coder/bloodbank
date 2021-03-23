<html>
<head>
    <title> RAKTHA VEDHI </title>
    <link rel="stylesheet" type="text/css" href="login.css"> 
    
<style type="text/css">
    .div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
      <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:40px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
  
    <br><br><br><br></div><br><br><br></div>


    <script src="checking.js"></script>
</head>
    <body><br><br>
      

    <div class="login-box">
   
        <h1 >Blood Bank Login </h1>
            <form name="login" action="blood_bank_login.php" method="post">
                <br>
            <!--p>Company ID</p>
            <input type="number" name="Company_ID" placeholder="Enter Company ID" required-->    
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
          <button class="button"><a href="index.php" style="font-size: 18px;">Cancel</a></button>

            <input type="submit" name="submit" value="Login">

            <!--a href="#.html">Forget Password</a-->    
            </form>
        
        
        </div>
    
    </body>
</html>
<?php
session_start();
 $con = mysqli_connect('localhost', 'root','');

if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
    echo 'Database not connected';
}

$username = $_POST['username'];
$password = ($_POST['password']);
$username = stripslashes($username);
$password = stripslashes($password);
//$_SESSION['Company_ID']=$Company_ID;


$ret=mysqli_query( $con, "SELECT * FROM blood_bank_registration WHERE username='$username' AND password='$password'  LIMIT 1 ") or die("Could not execute query: " .mysqli_error($con));
        $row = mysqli_fetch_assoc($ret);

        if(!$row || !$ret) {
           // echo '<h2 style="margin-left:30%;">Incorrect username or password !</h2>';
			echo '<script> alert("Incorrect username or password")</script>';
              header("refresh:0;url=blood_bank_login.html");

        }

        else {
            //echo 'Login Successful !'."<br>";
			//echo '<script> alert("Logged in successfully")</script>';
			$_SESSION['Blood_Bank_ID']=$row['Blood_Bank_ID'];
           $sql="INSERT INTO login(username,password) VALUES('$username', '$password')";
           if (mysqli_query($con,$sql)) 
           {
                             header("refresh:0;url=blood_bank_options.html");
           } 
           else 
           {
                echo 'Academic Not Inserted';
           }
}

mysqli_close($con);
?>

       