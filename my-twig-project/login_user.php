<?php
session_start();

require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);
    
$servername = "localhost";
$firstName = "root";
$lastName = "";
$dbname = "users";

$conn = new mysqli($servername, $firstName, $lastName, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$firstName = $_POST['input1'];
$lastName = $_POST['input2'];

$error = "_";

$stmt = $conn->prepare("SELECT * FROM user WHERE user.firstName='$firstName' AND user.lastName = '$lastName'");
$stmt->execute();
$result = $stmt->get_result();

$user = mysqli_fetch_assoc($result);


$_SESSION['loggedin'] = false;



if ($result->num_rows > 0) {
    if($user['role'] == 'admin')
    $_SESSION['isAdminLoggedIn'] = true;
  else
    $_SESSION['isAdminLoggedIn'] = false;
   $error = "ok";
   $_SESSION['loggedin'] = true;
    header('Location: http://localhost/my-twig-project/index.php');}
  
  else {
    $error = "unkown_user";
  }

  echo $twig->render('login.html.twig', [
    'stylesheet1' => 'site_styles.css',
    'heading' => 'Zombie Shooter',
    'title'=>'Login',
    'errorMessage'=>$error
]);

?>