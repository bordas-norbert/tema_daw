<?php
session_start();
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);
$slides = [
    [
        'number' => 1,
        'total' => 4,
        'image' => 'shooter_1.png',
        'text' => 'Best zombie shooter game is almost here!'
    ],
    [
        'number' => 2,
        'total' => 4,
        'image' => 'shooter_2.png',
        'text' => 'Stunning graphics and multiplayer campaign missions'
    ],
    [
        'number' => 3,
        'total' => 4,
        'image' => 'shooter_3.png',
        'text' => 'Over 50 types of zombies with special abilities'
    ],
    [
        'number' => 4,
        'total' => 4,
        'image' => 'shooter_4.png',
        'text' => 'Do not miss out! Preorder now!'
    ]
];

$jsFiles = [
    'automaticslideshow.js',
    'slideshow.js',
    'enter_event_handler.js'
];
$dropdownElements = [
    [
        'hrefText' => 'About the game',
        'hrefPageName' => 'Weapons',
        'URL' => 'weapons.php'
    ],
    [
        'hrefText' => 'Preorder',
        'hrefPageName' => 'Steam',
        'URL' => 'www.google.com'
    ]
    
];



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
$siteComments = new \Ds\Vector([]);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
        $siteComments->push("" . $row["content"]);
    }
} else {
        echo "0 results";
    }
$conn->close();

$columnDivs = [
        [
            'colNr' => 'col1',
            'divContentCol1' => $siteComments
        ],
        [
            'colNr' => 'col2',
            'divContent' => [" Our video game company is dedicated to creating immersive and exciting
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
            "]
        ],
        [
            'colNr' => 'col3',
            'divContent' => ['Partners
            ']
        ]
        
    ];
echo $twig->render('index.html.twig', [
    'stylesheet1' => 'dropdown.css',
    'stylesheet2' => 'site_styles.css',
    'stylesheet3' => 'slideshow.css',
    'heading' => 'Zombie Shooter',
    'slides'=>$slides,
    'jsFiles'=>$jsFiles,
    'title'=>'Zombie Shooter',
    'dropdownElements'=>$dropdownElements,
    'columnDivs'=>$columnDivs,
    'colThree'=>['Steam', 'Ubisoft'],
    'session'=>$_SESSION

]);
?>