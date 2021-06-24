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

        $chkbox = $_POST['chkbox']; 
        $chkstr = implode(",",$chkbox);
       
     // $sql = "INSERT INTO `domain` (`domain`) VALUES ('$chk')";
     
      $query ="INSERT INTO domain VALUES ('$chkstr')";
      $data = mysqli_query($conn , $query);

      if($data)
      {
        echo "Data inserted Successfuly";
      }
      else
      {
         echo " failed";
      }


        
	   $conn->close();
    }


?>