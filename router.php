<?php

$routers = [ //Examples
    '/' => 'functions/homepage.php',
    'about/me/company' => 'functions/about.php',
];

$route = $_SERVER['REQUEST_URI'];


if(array_key_exists($route, $routers)){
    include $routers[$route]; exit;
} else {
    echo '404'; exit();
}