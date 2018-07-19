<?php
$server="localhost";
$user="root";
$pass="";
$db="karthi";
$conn=mysqli_connect($server,$user,$pass,$db);
if(isset($_POST["submit1"]))
{session_start();
$name=$_POST["username"];
$password=$_POST["password"];
$sql="INSERT INTO sign (username,password) VALUES ('$name','$password')";
//$result=$conn->query($sql);
mysqli_query($conn,$sql);
}
?>
<html>
<head>
</head>
<body>
<form method="POST" action="#">
<div><center><BR><BR><BR><BR><BR><BR>
<h1>SIGNUP</h1>
USERNAME:<input type="text" name="username" placeholder="USERNAME"><br><br>
PASSWORD:<input type="password" name="password" placeholder="PASSWORD"><br><br>
<BR><button type="submit" name="submit1">SIGNUP</button>
</center>
</div>
</form>
</body>
</html>