<html>
<head>
    <title> RAKTHA VEDHI </title>
    <link rel="stylesheet" type="text/css" href="login.css"> 
    
<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css"/>
  <link href="fiile_nme.css" rel= "stylesheet" type="text/css">
  </head>
      <body>       
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
    <body>       
       
   <div class="login-box">
   
        <h1 style="font-family:Times new Roman,serif;color:white;font-size: 50px;">User Login</h1>
            <form name="login"  method="post">
			<div id="1">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button class="button"><a href="index.php" style="font-size: 18px;">Cancel</a></button>
			
            <input type="submit" name="submit" value="Login">
            <!--a href="#.html">Forget Password</a-->    
			</div>
           </form>
        
        
        </div>
    
    
     <script src="checking.js"></script>
  <script>
  $("#1").keyup(function(event){
    if(event.keyCode == 13){
        $("form").submit();
    }
});

$("form").on('submit', function(e){
    e.preventDefault();
    //alert('abcde');
});
</script>
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
$password = $_POST['password'];
$username = stripslashes($username);
$password = stripslashes($password);

// $sql = "Select count(*) from login where (Email = '$Email' and Password = '$Password')";

// $result = mysqli_query($conn,$sql);
// $count = mysqli_num_rows($result);
// if($count==1){
// echo 'success';
// }else{
// echo 'failure';
// }
        $ret=mysqli_query( $con, "SELECT * FROM donor_registration WHERE username='$username' AND password='$password' LIMIT 1 ") or die("Could not execute query: " .mysqli_error($con));
        $row = mysqli_fetch_assoc($ret);

        if(!$row || !$ret) {
           //   echo '<h2><style="margin-left:100px;">Incorrect username or password !</h2>';
			echo '<script> alert("Incorrect username or password")</script>';
             header("refresh:0;url=donor_login.html");
			//echo 'window.location.href="donor_login_validation.php"';
        }

        else {
          $_SESSION['Donor_ID']=$row['Donor_ID'];
          //  echo '<h2><style="margin-left:100px;">Login Successful !'."</style></h2><br>";
		  //echo '<script> alert("Logged in successfully")</script>';
           $sql="INSERT INTO login(username,password) VALUES('$username', '$password')";
           if (mysqli_query($con,$sql)) 
           {
                
               header("refresh:0;url=donate.html");
				//echo 'window.location.href="donate.html"';
           } 
           else 
           {
                echo 'Academic Not Inserted';
           }
        }



?>
