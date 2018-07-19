<?php
$host="localhost";
$username="root";
$pass="";
$db="karthi";
$conn =mysqli_connect($host, $username, $pass, $db);
//mysql_select_db($db);
if(isset($_POST['submit1']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$sql="select * from sign where username='".$uname."'AND password='".$password."'limit 1";
$result = $conn->query($sql);
//mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{echo "successfully logged in";
exit();
}
}
?>
<html>
<head>
<style>
body
{
background-image:url("cc.jpg");
background-repeat:no repeat;
}
h1
{font-family:Bernard MT Condensed;
color:yellow;
font-size:40;
}
div
{
height:300px;
width:50%;
color:white;
background-color:transparent black;
}
button
{background-color:yellow;
height:10%;
}
button:hover
{
color:red;
border:solid;
}
#t
{
height:10%;
}
#b
{
height:10%;
width:15%;
}
</style>
</head>
<body><BR><BR><BR>
<center><h1>WELCOME TO HOTEL TAMHIZAN</h1></center>
<center><br><br><BR>
<form name="form1" method="POST" action="#" onsubmit="return load()">
<div>
<br><br><BR>
<br><br><BR>

USERNAME    : <input type="text" id="t" name="username" placeholder="Enter the username"><br><br><BR>
PASSWORD    :<input type="password" id="t" name="password" placeholder="PASSWORD"><br><br>
<button type="submit"  name="submit1" id="b">LOGIN</a></BUTTON>
</form>
</div>
</center>
<script type="text/javascript">
function load()
	{
		var uname =document.forms["form1"]["username"].value;
		var password=document.forms["form1"]["password"].value;
		if(!uname && !password)
			{
				alert("Enter The Username and password");
				return false;
			}
                 if(!uname)
                  {
                    alert("Enter the Username");
}
		if(!password)
			{
				alert("Enter The Password");
				return false;
			}
			return true;
              uname.addEventListener("blur",nameVerify, true);
password.addEventListener("blur",passwordVerify, true);
              
	}
</script>

</body>
</html>
