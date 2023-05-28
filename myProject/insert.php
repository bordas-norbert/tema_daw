<?php
$input = $_POST["input"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_comments";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($input != "")
$sql = "INSERT INTO comments (content) VALUES ('$input')";

if ($conn->query($sql) === TRUE) { 
    header("Location: http://localhost/myProject/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>