<?php

session_start();

//var_dump($_SESSION);
//unset($_SESSION['userID']);

$request = $_SERVER['REQUEST_URI'];

if (isset($_POST) && sizeof($_POST) > 0) {
    switch ($_POST['requestType']) {
        case 'login':
            require './resources/functions/loginVerification.php';
            if (verifyLogin($_POST['email'], $_POST['password'])) {
                $_SESSION['userID'] = $_POST['email'];
            }
            header('Location: /ForceAndDestinyHub/');
            break;

        case 'logout':
            require './resources/functions/logout.php';
            header('Location: /ForceAndDestinyHub/');
            logout();
            break;
            
        default:
            header('Location: /ForceAndDestinyHub/');
    }
} else {
    //When DB is set up, could also check the userID is valid
    if (isset($_SESSION['userID'])) {

        switch ($request) {
            case '/ForceAndDestinyHub/' :
                require __DIR__ . '/views/index.php';
                break;
            case '' :
                require __DIR__ . '/views/index.php';
                break;
            case '/ForceAndDestinyHub/about' :
                require __DIR__ . '/views/about.php';
                break;
            case '/ForceAndDestinyHub/starmap' :
                require __DIR__ . '/views/starmap.php';
                break;
            case '/ForceAndDestinyHub/login' :
                require __DIR__ . '/views/login.php';
                break;
            default:
                http_response_code(404);
                require __DIR__ . '/views/404.php';
                break;
        }

    } else {
        require __DIR__ . '/views/login.php';
    }
}
?>