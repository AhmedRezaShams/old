<?php
session_start();

include "db.php";
if (isset($_POST['login']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$login =validate( $_POST['login']);
	$password = validate($_POST['password']);

	if(empty($login)){

		header("Location: index.php?error=User name required");
		exit();
	}else if(empty($password)){
		header("Location: index.php?error=password is required");
	exit();

	}else{
		$sql = "SELECT * from login where username = '$login' AND password = '$password' ";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $login &&  $row['password'] === $password){
				$_SESSION['username'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: home.php");
				exit();
			}	else{
				header("Location: index.php?error=incorrect username or password");
				exit();
	
			}
				
			
			
		}	
			else{
			header("Location: index.php?error=incorrect username or password");
			exit();

		}

	}

}else{
	header("Location: index.php?error");
	exit();
}






?>






