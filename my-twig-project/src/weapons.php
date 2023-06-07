<!DOCTYPE html>
<html>
<head>
<title>Weapons</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
</style>
<link rel="stylesheet" href="styles/site_styles.css">
<link rel="stylesheet" href="styles/dropdown.css">
<link rel="stylesheet" href="styles/slideshow.css">
<link rel="stylesheet" href="styles/weapons.css">
</head>
<body class="body">

<div id="container_principal"> 
 <div id="header">	
   <h1 class="h1">Weapons |
   <a href="http://localhost/myProject/index.php">Home</a>
   </h1>
 </div>
 
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="src/shooter_1.png" style="width:100%">
    <div class="text">Best zombie shooter game is almost here!</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="src/shooter_2.png" style="width:100%">
    <div class="text">Stunning graphics and multiplayer campaign missions</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="src/shooter_3.png" style="width:100%">
    <div class="text">Over 50 types of zombies with special abilities</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="src/shooter_4.png" style="width:100%">
    <div class="text">Don't miss out! Preorder now!</div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>

 <div id="menu">
	<div class="grid-container">
        <div class="grid-item">
            <p>The zombie apocalypse AK-47 is a reliable and versatile weapon that can help you survive in the apocalypse. 
                With a durable metal frame and a classic design, this weapon is built to last. The AK-47 is also incredibly 
                accurate, with a long barrel that allows you to take out zombies from a safe distance. The weapon is loaded 
                with powerful rounds that are perfect for taking out both slow-moving and fast-moving zombies. Whether you're fighting
                 off a single zombie or taking on a group of them, the zombie apocalypse AK-47 is a dependable weapon that you can count on.
            </p>
        </div>

        <div class="grid-item">
            <img src="src/weaponimg_1.png" class="weapon-img">
        </div>

        <div class="grid-item">
            <p> The zombie apocalypse grenade launcher is a heavy-duty weapon that can help you 
                take down hordes of zombies with ease. With a long barrel and a sturdy stock, this
                 weapon is designed for stability and accuracy. The grenade launcher is loaded with 
                 powerful explosive rounds that can take out multiple zombies at once, making it the 
                 perfect weapon for clearing out large groups of undead. The weapon is also equipped 
                 with a scope, allowing you to aim with precision and take out zombies from a safe distance.
            </p>
        </div>

        <div class="grid-item">
            <img src="src/weaponimg_2.png" class="weapon-img">
        </div>

        <div class="grid-item">
            <p>The Big-Tilda is the ultimate zombie apocalypse bazooka. This weapon is a beast,
                 with a massive barrel and a powerful explosive charge that can take out entire 
                 buildings. The Big-Tilda is so powerful that it can even take down some of the 
                 larger zombie types with a single shot. The weapon is also equipped with a targeting
                  system that allows you to lock onto your targets and fire with precision. With the
                   Big-Tilda by your side, you'll be able to take on even the toughest zombie hordes and come out on top.</p>
        </div>

        <div class="grid-item">
            <img src="src/weaponimg_3.png" class="weapon-img">
        </div>

    </div>
 <div id="footer">
	All rights reserved. &copy; Firma XY 2021.
 </div>
 
</div>
<script src="automaticslideshow.js"></script>
<script src="slideshow.js"></script>

</body>
</html>