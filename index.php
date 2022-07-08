<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/Home.php';
        break;
    case '' :
        require __DIR__ . '/Home.php';
        break;
    case '/About-Us' :
        require __DIR__ . '/About-Us.php';
        break;
    case '/Canada' :
        require __DIR__ . '/Canada.php';
        break;
    case '/Contact-Us' :
        require __DIR__ . '/Contact-Us.php';
        break;
    case '/FAQs' :
        require __DIR__ . '/FAQs.php';
        break;
    case '/Privacy-Statement' :
        require __DIR__ . '/Privacy-Statement.php';
        break;
    case '/Terms-of-Sale' :
        require __DIR__ . '/Terms-of-Sale.php';
        break;
    case '/Terms-of-Use' :
        require __DIR__ . '/Terms-of-Use.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}