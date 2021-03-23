<html>
<head>
<title>RAKTHA VEDHI</title>
</head>
<body>
	<style type="text/css">
		.button {
  background-color: #4CAF50; /* Green */
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
.button:hover {
background-color:red;	
}

.bg-image {
  /* The image used */
  background-image: url("t.png");
  
  /* Add the blur effect */
  filter: blur(2px);
  -webkit-filter: blur(2px);
  
  /* Full height */
  height: 70%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

</style>
<body>
    <div class="bg-image"></div>
<div class="bg-text">
     <h1 style="font-size:50px">UPDATE BLOOD DONATION TIMINGS</h1>
    <p>"If you're a blood donor, you're a hero to someone, somewhere, who received your gracious gift of life."</p>
</div>
<div data-role="fieldcontain">
    <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain" style="width: 460px;position: absolute;left:440px;top: 485px;">
    	<legend style="font-size: 30px;font-family: Comic Sans MS"><b>UPDATE</b></legend>   <center> 
    	<BR><BR>       

<form name="update" method="post">
<select name="day">

<option>Monday</option>
<option>Tuesday</option>
<option>Wednesday</option>
<option>Thursday</option>
<option>Friday</option>
<option>Saturday</option>
<option>Sunday</option>
</select><br><br>
<input class="button" type="submit" name="submit" value="Submit"></input>
<input class="button" type="button" name="cancel" onclick="window.location.href='blood_bank_options.html';" value="Cancel"></input>
<br><br>

<?php
session_start();
$ID=$_SESSION['Blood_Bank_ID'];

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
	$day=$_POST['day'];
	$_SESSION['updated_slot_day']=$day;
	$query="SELECT * FROM blood_donation_slot_timings WHERE Blood_Bank_ID=$ID AND Day='$day'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{   
		
		echo '<h1>Previous Slots<br></h1>';
		while($row=mysqli_fetch_array($result))
		{
			echo $row['Slots'].'&nbsp;&nbsp;&nbsp;&nbsp;';
		}
	}
	
	?>
	<br><h1>Update Slots</h1><br>
	<input id="btnAdd" type="button" value="Add Slot"/><br><br>
	<div id="TextBoxContainer"></div><br><br>
	<input id="btnGet" class="button" style="background-color: blue;" type="button" value="Save"/>
	<button class="button" style="background-color:green;"    name="update1" onclick="fun()">Update</button>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	values="";
	function fun()
	{
		alert('Slots are Updated');
		setTimeout(function() {
		window.location.href="insert_updated_slots.php?val="+values;},3000);
	}
	
	$(function() {
		
$("#btnAdd").bind("click", function () {
	
        var div = $("<div />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
	
    $("#btnGet").bind("click", function () {
        
        $("input[name=DynamicTextBox]").each(function () {
            values += $(this).val() + ",";
			
        });
        alert('Saved');
		
    });
    $("body").on("click", ".remove", function () {
		$(this).closest("div").remove();
		
    });
	function GetDynamicTextBox(value) {
    return '<input name = "DynamicTextBox" type="time" value = "" />&nbsp;'+
            '<input type="button" value="Remove" class="remove" />'
}
	});
</script>

<?php
}
?>
</form>
</body>
</html>