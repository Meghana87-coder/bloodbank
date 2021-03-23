<html>
<head>
<title>RAKTHA VEDHI</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: grey;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
h2{
	font-family: times new roman;
	font-size: 30px;
	color: :red;
}
p{
	font-family:Verdana;
	color:darkred;
	text-decoration: underline;
	font-weight: bold;
}
.button {
  background-color: #4CAF50;
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
body{
    margin: 0;
    padding: 0;
    background: url(lk.jpg);
    background-size: 100%;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background: #C80000;
    color: #fff;
    top: 55%;
    left: 65%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
     border:grey; 
            border-color: black;
            box-shadow: 5px 10px 8px #888888;
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

$Donor_ID=$_SESSION['Donor_ID'];
//$max=$_SESSION['max_patients'];

$weight=$_POST['weight'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_groups'];
$blood_bank_name=$_POST['blood_bank_name'];
$date_picker=$_POST['date_picker'];
echo "<CENTER><h2>PLEASE SELECT THE TIME SLOT</h2>";
echo "<p>Your weight is:</p>";
echo $weight;
echo "<p> Your gender:</p>";
echo $gender;
echo "<p>Your blood group:</p>";
echo $blood_group;
echo "<p>Selected blood bank:</p>";
echo $blood_bank_name;
echo "<p>DAY AND DATE for the blood donation:</p>";
$time=strtotime($date_picker);
$day=date('l',$time);
echo $day;
echo "&nbsp;&nbsp;";
echo $date_picker;
$_SESSION['date_picker']=$date_picker;
$_SESSION['day']=$day;
$_SESSION['blood_bank_name']=$blood_bank_name;

$query="SELECT * FROM blood_bank_registration WHERE Blood_Bank_Name='$blood_bank_name'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
		$Blood_Bank_ID=$row['Blood_Bank_ID'];
}

/*echo "<style>.Button{display:none}
.Button{padding:3px; margin:4px; background:#CCC; border:1px solid #333; cursor:pointer;}
.Button:checked + .Button{background:#fff;}
</style>";*/
echo '<br><br>';
echo "<p>THESE ARE THE AVAILABLE TIMINGS. PLEASE SELECT ANY ONE OF THE TIMINGS</p></CENTER>";
//$count=1;
$query="SELECT * FROM blood_donation_slot_timings WHERE Day='$day' AND Blood_Bank_ID=(SELECT Blood_Bank_ID FROM blood_bank_registration WHERE Blood_Bank_Name='$blood_bank_name')";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	
	while($row=mysqli_fetch_array($result))
	{	
		/*if($count==1)
		{
			echo '<span id="myDIV"><button class="btn active" id="'$count'" onclick="fun("$count")">'.$row['Slots'].'</button>&nbsp;&nbsp;&nbsp;&nbsp;';
			
			$count=$count+1;
		}
		else
		{*/
		$max=$row['Max_patients'];
		$slot=$row['Slots'];
			$query1="SELECT * FROM donors_per_slot WHERE Date='$date_picker' AND Slot='$slot' AND Blood_Bank_ID=$Blood_Bank_ID";
			$result1=mysqli_query($con,$query1);
			if(mysqli_num_rows($result1)<$max)
			{
				
				//while($row1=mysqli_fetch_array($result1))
					//echo $row['Slots'];
					echo '<CENTER><button class="btn" onclick=window.location.href="appointment_confirm.php?slot='.$row['Slots'].'">'.$row['Slots'].'</button></CENTER>&nbsp;&nbsp;&nbsp;&nbsp;';
			}
			//echo '<span id="myDIV"><button onclick="fun()">'.$row['Slots'].'</button></span>';
			//echo '<span id="myDIV"><button class="btn" id="'$count'" onclick="fun()">'.$row['Slots'].'</button>&nbsp;&nbsp;&nbsp;&nbsp;';
		//}
	}
	//echo '</span>';
}
?>


<script>
/*function fun(var count) {
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
//document.write(btns.length);
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
var slot=document.getElementById(count).value;
document.write(slot);
}*/


</script>
</head>
<body>
<form name="appointment"  method="post">
<br><br><br>
<center><button class="button"><a href="donate_appointment.php">Back</a></button></center>
<!--input type="submit" name="submit" onsubmit="fun1()" value="Submit"/-->
</form>
</body>
</html>