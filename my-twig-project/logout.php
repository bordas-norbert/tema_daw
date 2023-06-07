<?php
session_start();

// Perform logout operations
session_unset();
session_destroy();

// Redirect to a login page or any other appropriate page
header('Location: index.php');
exit;
?>
