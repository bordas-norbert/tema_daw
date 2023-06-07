<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);
    
$formDatas = [
    [
        'id' => 1,
        'label'=> 'First Name'
    ],
    [
        'id' => 2,
        'label'=> 'Last Name'
    ],
    [
        'id' => 3,
        'label'=> 'tel. number'
    ],
    [
        'id' => 4,
        'label'=> 'email'
    ],
];
   
echo $twig->render('register.html.twig', [
    'stylesheet1' => 'site_styles.css',
    'heading' => 'Zombie Shooter',
    'title'=>'Register',
    'formDatas' => $formDatas
]);
?>