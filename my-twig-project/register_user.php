<?php
$input1 = $_POST["input1"];
$input2 = $_POST["input2"];
$input3 = $_POST["input3"];
$input4 = $_POST["input4"];
$input5 = 'user';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (firstName, lastName, telNr, email, role) 
VALUES ('$input1', '$input2', '$input3', '$input4', '$input5')";

if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo 'alert("Successful registering!");';
    echo 'window.location.href = "http://localhost/my-twig-project/register.php";';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>