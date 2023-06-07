<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);
$weaponsDescriptions = [
  [
    'id'=> 1,
    'text'=> 'The zombie apocalypse AK-47 is a reliable and versatile weapon that can help you survive in the apocalypse. 
    With a durable metal frame and a classic design, this weapon is built to last. The AK-47 is also incredibly 
    accurate, with a long barrel that allows you to take out zombies from a safe distance. The weapon is loaded 
    with powerful rounds that are perfect for taking out both 
    slow-moving and fast-moving zombies. Whether you are fighting off a single zombie or taking on a group of them, the zombie apocalypse AK-47 is a dependable weapon that you can count on.'
  ],
  [
    'id' => 2,
    'text'=>'The zombie apocalypse grenade launcher is a heavy-duty weapon that can help you 
    take down hordes of zombies with ease. With a long barrel and a sturdy stock, this
     weapon is designed for stability and accuracy. The grenade launcher is loaded with 
     powerful explosive rounds that can take out multiple zombies at once, making it the 
     perfect weapon for clearing out large groups of undead. The weapon is also equipped 
     with a scope, allowing you to aim with precision and take out zombies from a safe distance.
    '
    
  ],
  [
    'id'=>3,
    'text'=>'The Big-Tilda is the ultimate zombie apocalypse bazooka. This weapon is a beast,
    with a massive barrel and a powerful explosive charge that can take out entire 
    buildings. The Big-Tilda is so powerful that it can even take down some of the 
    larger zombie types with a single shot. The weapon is also equipped with a targeting
     system that allows you to lock onto your targets and fire with precision. With the
      Big-Tilda by your side, you will be able to take on even the toughest zombie hordes and come out on top.</p>
'
  ]

  ];

echo $twig->render('weapons.html.twig', [
    'stylesheet2' => 'site_styles.css',
    'stylesheet3' => 'slideshow.css',
    'heading' => 'Weapons',
    'title'=>'Weapons',
    'weaponsDescription'=>$weaponsDescriptions
]);
?>