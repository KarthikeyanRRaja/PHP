<?php
$server="localhost";
$user="root";
$pass="";
$db="karthi";
$conn=mysqli_connect($server,$user,$pass,$db);
if(isset($_POST["submit7"]))
{session_start();
$name=$_POST["k"];
$last=$_POST["ka"];
$dob=$_POST["kar"];
$age=$_POST["kart"];
$addr=$_POST["karth"];
$cno=$_POST["karthi"];
$emi=$_POST["karthik"];
$sql="INSERT INTO regi (fname,lname,dob,age,address,cno,email) VALUES ('$name','$last','$dob','$age','$addr','$cno','$emi')";
//$result=$conn->query($sql);
mysqli_query($conn,$sql);
}
?>
<html>
<head>
<style>
#one
{
background-color:blue;
color:white;
font-family:Calibri;
height:9%;
padding:0px 15px;
font-size:20;
width:100%;
float:left;
display:block;
}
#two
{
background-color:#CFCFE0;
width:700;
}
#s1
{
font-family:Calibri;
font-size:25px;
}
#b1
{
background-color:green;
padding:5px 15px;
border-radius:50%;
}
#b1:hover
{
color:white;
}
</style>

</head>
<body>
<center><img src="tele.png"></center><BR><BR>
<div id="one">
</div>
<br><br><br>
<center>
<p id="s1">We are happy to be our Part of the Family!!!</p>
<h1>Registration</h1></center>
<hr>
<center>
<div id="two">
<br>
<form method="POST" action="#" onload="click()">
<div>
<b>First Name</b>
<input type="text" name="k" id="t1"><br><br><br>
<b>Last Name</b>
<input type="text" name="ka" id="t2"><br><BR><BR>
<b>Date Of Birth</b>
<input type="date" name="kar" id="t3"><br><BR><BR>
<b>Age</b>
<input type="text" name="kart" id="t4"><br><BR><BR>
<b>Address</b>
<input type="text" name="karth" id="t5"><br><BR><BR>
<b>Contact Number</b>
<input type="text" name="karthi" id="t6"><br><BR><BR>
<b>EMail ID</b>
<input type="text" name="karthik" id="t7"><br><BR><br>
<button type="submit" name="submit7" id="b1" onclick="check()">Submit</button>
</div>
</center>
</form>
<script>
function check()
{
var a=document.getElementById("t1").value;
var b=document.getElementById("t2").value;
var c=document.getElementById("t3").value;
var d=document.getElementById("t4").value;
var e=document.getElementById("t5").value;
var f=document.getElementById("t6").value;
var g=document.getElementById("t7").value;
if(!a)
{
alert("Enter your First name");
}
if(!b)
{
alert("Enter your Last name");
}
if(!c)
{
alert("Enter your DOB");
}
if(!d)
{
alert("Enter your AGE");
}
if(!e)
{
alert("Enter your Address");
}
if(!f)
{
alert("Enter your Contact Number");
}
if(!g)
{
alert("Enter your Email");
}
}
</script>
</body>
</html>