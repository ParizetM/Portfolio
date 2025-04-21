<?php
$routes = [
    'home' => 'home.php',
    'projets' => 'projets.php',
    'projet' => 'projet.php',
    '404' => '404.php',
];
if (array_key_exists($page, $routes)) {
    include $routes[$page];
} else {
    include $routes['404'];
}
?>