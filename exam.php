<?php

$name=$_POST['name'];
$top=$_POST['pizza'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_mgmt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



 $sql = "INSERT INTO Exam (Name,Topping)
VALUES ('$name','$top')";

if ($conn->query($sql) === TRUE) {
    
	$message="Inserted Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
	

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}

$conn->close();
?>
