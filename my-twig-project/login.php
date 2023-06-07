<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);
    
$formDatas = [
  [
    'id'=> '1',
    'label' => 'First Name'
  ],
  [
    'id'=> '2',
    'label' => 'Last Name'
  ]
  ];
$showButton = 'true';
echo $twig->render('login.html.twig', [
    'stylesheet1' => 'site_styles.css',
    'heading' => 'Zombie Shooter',
    'title'=>'Login',
    'formDatas'=>$formDatas,
    'showButton'=>$showButton
]);
?>