<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'game_comments';

$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve the comment ID from the request
$commentId = $_POST['commentId'];

// Delete the desired record
$deleteStmt = $connection->prepare("DELETE FROM comments WHERE id = ?");
$deleteStmt->bind_param("i", $commentId);
$deleteStmt->execute();
$deleteStmt->close();

// Renumber the rows in the table
$renumberQuery = "SET @row_number := 0;
                 UPDATE comments SET id = (@row_number:=@row_number+1) ORDER BY id";
$connection->multi_query($renumberQuery);

$connection->close();

header('Location: http://localhost/my-twig-project/index.php');
exit;
?>
