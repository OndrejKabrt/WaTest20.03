<!-- inspiroval jsem se v kodu pana učitele Pavláta -->

<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '\Visible\index.php';
        break;
    case '/onas':
        $redirect = '\Visible\ONas.php';
        break;
    case '/login':
        $redirect = '\Visible\LoginForm.php';
        break;
    case'/welcome':
        $redirect = '\Visible\Welcome.php';
        break;
    case '/register':
        $redirect = '\Visible\RegisterForm.php';
        break;
    case '/SeznamNasichZviratek':
        $redirect = '\Visible\SeznamNasichZ.php';
        break;
    case '/SeznamChtenychZaviratek':
        $redirect = '\Visible\SeznamChtenychZ.php';
        break;
    case '/database/login':
        $redirect = '\Visible\database\login.php';
        break;
    case '/database/register':
        $redirect = '\Visible\database\register.php';
        break;
    case '/database/logout':
        $redirect = '\Visible\database\logout.php';
        break;  
    default:
        http_response_code(404);
        require __DIR__ . '\V\404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/Visible/basic/Header.php';
require_once __DIR__ . $redirect ?? __DIR__ . '/Visible/index.php';
require_once __DIR__ . '/Visible/basic/Footer.php';