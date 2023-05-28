<!DOCTYPE html>
<html>
<head>
<title>Zombie Shooter</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
</style>
<link rel="stylesheet" href="styles/site_styles.css">
<link rel="stylesheet" href="styles/dropdown.css">
<link rel="stylesheet" href="styles/slideshow.css">
</head>
<body class="body">

<div id="container_principal"> 
 <!-- HEADER ZONE --> 
 <div id="header">	
	<h1 class="h1">Zombie Shooter</h1>
 </div>
 
 <!-- Slideshow container -->
 <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="shooter_1.png" style="width:100%">
    <div class="text">Best zombie shooter game is almost here!</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="shooter_2.png" style="width:100%">
    <div class="text">Stunning graphics and multiplayer campaign missions</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="shooter_3.png" style="width:100%">
    <div class="text">Over 50 types of zombies with special abilities</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="shooter_4.png" style="width:100%">
    <div class="text">Don't miss out! Preorder now!</div>
  </div>
  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>

<!-- Menu zone -->
 
 <div id="menu">
	<ul>
		<li class="dropdown">
			<a href="#">About the game</a>
			<ul class="dropdown-content">
				<li><a href="weapons.php">Weapons</a> </li>

			</ul>
		</li>
		<li class="dropdown">
			<a href="#">Preorder</a>
			<ul class="dropdown-content">
				<li><a href="https://store.steampowered.com/">Steam</a> </li>
			</ul>
		</li>
	</ul>     
 </div>
 <div id="col1">
    <h1>Comments section</h1>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "game_comments";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM comments";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
            echo "" . $row["id"]. ". " . $row["content"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <form method="post" action="insert.php">
      <label for="input">Add comment:</label>
      <input type="text" id="input" name="input">
      <input type="submit" value="Submit">
    </form>

 </div>
  <div id="col2"><h1>Zombie Shooter</h1>
  <p>
  Our video game company is dedicated to creating immersive and exciting
   gaming experiences. We are a team of passionate developers who strive to
    make each game better than the last. Our upcoming FPS game, Zombie Shooter is no exception. 
  In Zombie Shooter players will be tasked with surviving a zombie apocalypse.
   The game features intense first-person shooter gameplay, with a variety of weapons and 
   upgrades available to help players fight their way through hordes of the undead. 
  The game is set in a post-apocalyptic world, with detailed environments that 
  bring the world to life. From abandoned cities to desolate wastelands, players
   will explore a variety of locations as they fight for survival.
  Zombie Shooter also features a thrilling storyline, with memorable characters 
  and unexpected twists and turns. Players will have to make tough choices as they 
  navigate the dangerous world of the game, with their decisions impacting the outcome of the story.
  We are committed to delivering a high-quality gaming experience, with top-notch graphics, 
  sound, and gameplay. Zombie Shooter is set to be one of the most exciting FPS games of the year, 
  and we can't wait for players to get their hands on it.
  </p></div>
  <div id="col3">
    <h1>Parteneri</h1>
    <br>
    <a href="https://www.ubisoft.com/en-us/">Ubisoft</a> <br>
    <a href="https://www.riotgames.com/en">Riot Games</a>

  </div>
 
 <div id="footer">
	All rights reserved. &copy; GamingBros 2023.
 </div>
    
</div>
<script src="automaticslideshow.js"></script>
<script src="slideshow.js"></script>
<script src="enter_event_handler.js"></script>
</body>
</html>