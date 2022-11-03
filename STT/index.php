
<!DOCTYPE html>
<html>
<head>
	<title>login for data base</title>

</head>

<body bgcolor ="grey">
	<h1 align="center">Login Please</h1>
	<form action="login.php" method="post">
			<div align="center"  >
                <?php
        if (isset($_GET['error'])){
            ?> <p class = "error"> <?php echo $_GET['error'];?></p>

        <?php }
?>
		<label  for="login">Login Id</label>
		<input type="text" name="login" placeholder="ahm@gmail.com">
	</div><br>
	<div align ="center" >
		<label for="password">Password</label>
		<input type="password" name="password" placeholder="*****">
	</div><br>
	
	<div align ="center">
		<button class="submit" >Login</button>
	</div>
</form>
</body>

</html>