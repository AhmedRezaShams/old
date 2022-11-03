<?php
$host ="localhost";
$user= "root";
$password = "";
$db = "10thbatch03";
mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM `login` where username=`".$uname."`and password=`".$password."` limit 1";
    $result = mysql_query($sql);
    if (mysql_num_rows($result)==1){
        echo "you have successfully loged in";
    }
    else{
        "incorrect password";
    }
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>login for data base</title>

</head>

<body bgcolor ="grey">
	<h1 align="center">Login Please</h1>
	<form action="#" method="post">
			<div align="center"  >
		<label  for="login">Login Id</label>
		<input type="text" name="login" placeholder="ahm@gmail.com">
	</div><br>
	<div align ="center" >
		<label for="password">Password</label>
		<input type="password" name="password" placeholder="*****">
	</div><br>
	
	<div align ="center">
		<button class="login" >Login</button>
	</div>
</form>
</body>

</html>