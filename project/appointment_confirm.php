<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<body>
	<style >
		body{
    margin: 0;
    padding: 0;
    background-image: url(p.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.button {
  background-color: red;
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
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;

}
      </style>
      <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:40px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
  
    <br><br><br><br></div><br><br><br></div>
	
	<br><br><br><br><br><br><br><br><br><br>
	<center>
<form name="appointment"  action="send_appointment_mail.php" method="post">
<h1 style="font-family: Verdana">Press Submit if you want to confirm your appointment</h1>
<button class="button button1"><a href="donate_appointment.php">Cancel</a></button>
<input type="submit" class="button button1" name="submit" value="Submit"/>
<?php
session_start();
$slot=$_GET['slot'];
$_SESSION['slot']=$slot;

?>
</center>
</form>
</body>
</html>

