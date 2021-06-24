<?php

include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	input[type=text], input[type=password] {
		width=100%;
		height:25px;
		border-radius:5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}


	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: pink;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	
	}
	

	</style>

	
<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			Email<input id="text" type="text" name="email" required><br><br>
			Password<input id="text" type="password" name="psw" required><br><br>
			<label for="role"><b>Role</b></label>
    <br><br>
    <input type="radio" name="role" value="Student" id="Student">
            &nbsp;
        <span id="Student">Student</span>
        &nbsp;&nbsp;&nbsp;
    <input type="radio" name="role" value="Faculty" id="Faculty">
         &nbsp;
    <span id="Faculty">Faculty</span>
        
    <br><br>
			

			<input id="button" type="submit" value="Login" name="login"><br><br>

			

			<a href="Registration.html">Click to Register</a><br><br>
		</form>
	</div>
</body>
</html>

<?php
//session_start();
if(isset($_POST['login']))
{
	include("connection.php");
	$email = $_POST['email'];
	$psw = $_POST['psw'];
   // $role= $_POST['role'];

    $query = "SELECT * FROM users WHERE email = '$email' && psw = '$psw' ";
	//$query = "SELECT * FROM users1 WHERE role = '$role' && password = '$password'";
	

	$data = mysqli_query($conn, $query);

	$total = mysqli_num_rows($data);
	//echo $total;

	if($total == 1)
	{
		$_SESSION["role"] = $_POST['role'];
		header("Location: index.php");
		die;
		
		
	}
	else
	{
		echo "Login Failed";
	}
}

?>