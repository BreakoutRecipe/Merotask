<?php
// Get the request URI and normalize it
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove trailing slash for consistent matching
$uri = rtrim($uri, '/') ?: '/';

// Define your routes
$routes = [
    '/merotasks' => 'app/controllers/HomeController.php',
    '/userlogin' => 'app/views/userlogin.php',
    '/userregister' => 'app/views/userregister.php',
    '/usercontroller' => 'app/controllers/UserController.php',
    // Add more routes here as needed
];

// Check if the requested URI exists in routes
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // Check if the request is for the root path with a trailing slash
    $uriWithTrailingSlash = $uri . '/';
    if (array_key_exists($uriWithTrailingSlash, $routes)) {
        // Handle the case where the route is defined with a trailing slash
        require $routes[$uriWithTrailingSlash];
    // } else {
    //     // No matching route found, show 404
    //     http_response_code(404);
    //     require_once 'app/views/404.php';
    //     die();
    // }
}
}

