<?php
session_start();
?>
<html lang="en">
<meta charset="utf-8" />
<head>
    <title>RAKTHA VEDHI</title>
    <link rel="stylesheet" type="text/css" > 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
</head>
<body>
	<style>
     body {
  height: 900px; 
 }
p{
	font-family: Vollkorn;
}

* {box-sizing: border-box;}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: red;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid red;
}

/* Set a style for the submit button */
.btn {
  background-color: red;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.button {
  background-color: darkred;
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
  background-image: url("i.jpg");
  
  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(5px);
  
  /* Full height */
  height: 40%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
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
.div1{
  
    background-image: linear-gradient(white,white);
    background-repeat:no-repeat;
    background-position:left center;
    width:100%;

}

.required {
color:red;
}
      </style>
	
     
      <div  class="div1"><div>
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:40px;font-size: 30px;"><B>RAKTHA VEDHI</B></h1>
  
    <br><br><br><br></div><br><br><br></div>

	
  <body>
  <div class="bg-image"></div>
<div class="bg-text">
   <h1 style="font-size:50px">DONATE</h1>
    <i class="fa fa-quote-left fa-2x "></i>Donate your blood for a reason, let the reason to be life<i class="fa fa-quote-right fa-2x"></i>
</div>
	
	
	 <style >
 .container {
  display: flex;
    box-shadow: 10px 10px 5px grey;
 
 background-color: #ff524c;
background-image: url("f.png");
width:50%;
position: absolute;
left:350px;
}


.container > div {
  margin: 15px;
  padding: 20px;
  font-size: 30px;
} 



 </style>
 <br><br><br>
  <div class="container">
   
    
          
<form name="donate" method="post" action="select_time_slot.php" style="max-width:600px;margin:auto" ><br>
    <legend style="font-size: 30px;font-family: Comic Sans MS"><b>DONATE  PAGE</b></legend> <br>   
	<div class="input-container">
    <i class="fa fa-user icon"></i>
<input name="weight" type="number" placeholder="Enter weight" min="50" required />&nbsp;&nbsp;<span class="required">*</span>&nbsp;&nbsp; Donate the blood only if your weight is above 50.<br><br></div>
<div class="input-container">
    <i class="fa fa-mars-double icon"></i>

<input name="gender" type="radio" value="male" checked>Male<input name="gender" type="radio" value="female"/>Female<br><br></div>
  <div class="input-container">
    <i class="fa fa-heartbeat icon"></i>

<select name="blood_groups">
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
<option>A-</option>
<option>B-</option>
<option>O-</option>
<option>AB-</option>
</select>
</div>

         	
     <div class="input-container">
    <i class="fa fa-bank icon"></i>
<?php


$con = mysqli_connect("localhost", "root", "");

// Check connection
if (!$con) {
   echo 'Not connected to server';
}

if(!mysqli_select_db($con,'bloodbank'))
{
	echo 'Database not selected'; 
}

$Donor_ID=$_SESSION['Donor_ID'];

$query="SELECT Blood_Bank_Name FROM blood_bank_registration";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0)
{
	echo '<select name="blood_bank_name">';
	while($row = mysqli_fetch_array($result)) {
		
		echo '<option>'.$row['Blood_Bank_Name'].'</option>';
				
	}
	echo '</select>';
}
?>
</div>

 <div class="input-container">
    <i class="fa fa-calendar icon"></i>
<input id="datepicker" name="date_picker" type="text" placeholder="Appointment date" required /></div>


    <script type="text/javascript">


$(function() {
$('#datepicker').datepicker({
            dateFormat: "dd-mm-yy",  // Just get the DD instead of using "DD, d MM, yy"
			minDate: 0
            //onSelect: function (dateText, inst) {
			//var date=$(this).datepicker('getDate');
			//var day=$.datepicker.formatDate('DD',date);
             //$("p.name").html( "Day Name= " + day ); // Just the day of week
            });
			
        });
		

    </script><br>
	<input type="submit" class="button" name="SUBMIT" onsubmit="fun()"/><br><br><br></div></div>
	</form>
	 </fieldset><br><br>
   <!--footer>hjhzjf</footer-->
</body>
</html>