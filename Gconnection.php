<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}*/
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {

	    $group_name = $_POST['group_name'];
        $project_name = $_POST['project_name'];
        $domain = $_POST['domain'];
    
        
       
       //$sql = "INSERT INTO users (`id`, `name`, `email`, `psw`, `password`, `role`, `class`, `Departments`, `Contact`, `gender`) VALUES (NULL, '$name', '$email', '$psw', '$password', '$role', '$class', '$Departments', '$Contact', '$gender')";
      
       $sql = "INSERT INTO `group_main` (`group_id`, `group_name`, `project_name`, `domain`) VALUES (NULL, '$group_name', '$project_name', '$domain')";

        if ($conn->query($sql) === TRUE) 
        {
  			echo "New record created successfully";
		} else 
		{
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	   $conn->close();
    }


?>