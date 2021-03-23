<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
</html>
<?php
session_start();
 $con = mysqli_connect('localhost', 'root','');

if(!$con)
{
    echo 'Not connected to server';
}
else
{
    echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($con,'bloodbank'))
{
    echo 'Database not connected';
}
$username = $_POST['username'];
$password = ($_POST['password']);
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
        $ret=mysqli_query( $con, "SELECT * FROM blood_bank_registration WHERE username='$username' AND password='$password' LIMIT 1 ") or die("Could not execute query: " .mysqli_error($con));
        $row = mysqli_fetch_assoc($ret);

        if(!$row || !$ret) {
            echo 'Login Failed !';

              header("refresh:3;url=blood_bank_login.html");

        }

        else {
          $_SESSION['Blood_Bank_ID']=$row['Blood_Bank_ID'];
            echo 'Login Successful !'."<br>";
           $sql="INSERT INTO login(username,password) VALUES('$username', '$password')";
           if (mysqli_query($con,$sql)) 
           {
                
               header("refresh:3;url=Bupdate_search.html");

           } 
           else 
           {
                echo 'Academic Not Inserted';
           }
        }


mysqli_close($con);
?>
   