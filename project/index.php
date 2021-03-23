<!--html>
<head>
<title>RAKTHA VEDHI</title>
</head>
</html-->

<!--?php

	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$to="bloodbankonline66@gmail.com";
	$txt="Sender: ".$name."\nMessage: ".$message."\nPhone number: ".$phone;
	if(mail($to,$subject,$txt))
	{
		echo "<center><h1>YOUR MAIL IS SENT SUCCESSFULLY</h1></center>";
	}
	else
		echo "SORRY..! YOUR MAIL IS NOT SUCCESSFULL.";

header("refresh:3;url=index.html");
?-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: white;/*backgrounf*/
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}



.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: black;/*dropdown color*/
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: darkred;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin: auto;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 2s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.g{
  background-image:url(bck.jpg);
  background-repeat: no-repeat;
  background-position: absolute;
  top:50%;
  bottom: 50%;
}
.container{
  background: #fff;
  width: 600px;
  margin-top: 30px;
  margin-left:450px;
  height: 600px;
  padding-top:5px;
  background-color:#ccd9ff;
  /*background-image:url(contact_us1.jpg);*/
}
</style>
</head>

<body>
 <header class="w3-white">
    <img src="elogo.jpg" style="width:100px;height:100px;position: absolute;left:60px;top:19px"><h1 style="position: absolute;left:180px;top:26px"><B>RAKTHA VEDHI</B></h1>
    <br><br><br><br><br>
<hr></header>
<script>
   function fun()
   {
   alert("YOUR MAIL IS SENT SUCCESSFULLY");
   }
   </script>

<div>

<div class="topnav" id="myTopnav">

  <a  href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
   <a href="#aboutus1"><i class=" fa fa-users"></i> About us</a> 
 <a href="#contactus"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
   <div class="dropdown">
    <button class="dropbtn"><i class=" fa fa-user"> </i> Login</button> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
  <a href="blood_bank_login.html">Recipient</a>
    <a href="donor_login.html">Donor</a>
      
    </div>
  </div> 
    <div class="dropdown">
    <button class="dropbtn"><i class=" fa fa-user"></i> Register </button>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="blood_bank_register.html">Recipient</a>
    <a href="donor_register.html">Donor</a>
     
    </div>
  </div>

  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
<br>
<div >

<div class="slideshow-container" style="height:500px">

<div class="mySlides fade">
    <img src="i2.png" style="width:100%;height:500px;">
 
</div>

<div class="mySlides fade">
 
  <img src="dp.jpg" style="width:100%;height:500px;">
  
</div>

<div class="mySlides fade">
 
   <img src="i1.jpg" style="width:100%;height:500px;">
  
</div><br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div><br><br><br>
<style>
.flex-container {
  display: flex;
    box-shadow: 10px 10px 5px grey;
     background-image: linear-gradient( white,#ffcccc,white);
 
}


.flex-container > div {
 
  margin: 15px;
  padding: 20px;
  font-size: 30px;
}

 .flex-container1 {
	 background-color:#ff9999;
 }

</style>
<center><h2 class="w3-wide w3-container" ><u>ABOUT US</u></h2>
    <p class="w3-opacity"><i>DONATE BLOOD AND SAVE LIVES</i></p></center>
<div class="flex-container">
 <div style="max-width:800px;float: left;" id="aboutus">
        <p class="w3-justify" style="float: left; font-family: Times new roman;font-size: 20px;">Today, blood collecting centers collect and screen blood for infectious diseases, and blood banks store blood, ensuring that blood is available when patients need it for transfusions or other medical procedures. On average, every two seconds someone in the U.S. receives a blood transfusion.<br> Today, the nation's approximately 3,400 blood banks play a vital role in our nation’s healthcare system. Blood collecting centers carefully screen all donated blood for hepatitis B, hepatitis C, HIV, Zika, and other viruses and infectious agents.<br> Ensuring that safe blood and tissue products are available when they are needed is important to the health and wellbeing of Americans.Many people may require urgent blood, then they run in search of the required blood type, which might risk the life of the people.So Blood bank management system reduces the gap between blood donors and blood recipients. It preserves the required blood type for any future emergency.
        Blood bank is a  place where blood is collected and preserved for later use like blood transfusion.<br> It is a process of collecting, separating, make sure that donated blood is safe for blood transfusions and storing blood. Blood bank management system is a system which allows the recipient to register, check availability of the blood, orders the blood, receives the orders from other blood banks. The donor is allowed to register, login and donate the blood.</p></div>
<img src="ab.jpg" width="450" height="500" style="position: absolute;right: 10px;top:950px;border-radius: 50%">
</div>
</div>



<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:700px" id="contactus">
     <h2 class="w3-wide"><u>CONTACT US</u></h2>
    <p>Come to us for any blood donation events. Do not hesitate to contact us.</p>
    <p>You can also contact us by phone 00553123-2323:</p>
    <form name="contact"  method="post">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Phone Number" pattern="[6-9]{1}[0-9]{9}" required name="phone" ></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND EMAIL</button></p>
    </form>
</div>




<footer class="w3-center w3-sand w3-padding-32">
  <img src="logo.jpg" width="100" height="100">
  <h1 style="font-family: Comic Sans MS;color: darkred">"A single pint can save three lives, a single gesture can create a million smiles"</h1>
</footer>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$to="bloodbankonline66@gmail.com";
	$txt="Sender: ".$name."\nMessage: ".$message."\nPhone number: ".$phone;
	if(mail($to,$subject,$txt))
	{
		echo '<script>alert("YOUR MAIL IS SENT SUCCESSFULLY")</script>';
		header("refresh:0;url=index.html");
	}
	else
		echo '<script>alert("SORRY..! YOUR MAIL IS NOT SUCCESSFULL.")</script>';


}
?>
</body>
</html>



