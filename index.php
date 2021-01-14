<?php
$_SESSION['dateFirstVisit'] = date('_Y-m-d-H-i-s');
$_SESSION['countViewPage'] = 1;
$raw_url = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
if (isset($raw_url)) {
    switch ($raw_url) {
        case 'hobby':
            include 'pages/hobby.php';
            $_SESSION['countViewPage'] = $_SESSION['countViewPage'] + 1;
            break;
        case 'contact':
            include 'pages/contact.php';
            $_SESSION['countViewPage'] = $_SESSION['countViewPage'] + 1;
            break;
        case 'cv':
            include 'pages/cv.php';
            $_SESSION['countViewPage'] = $_SESSION['countViewPage'] + 1;
            break;
        default:
            include 'pages/404.php';
    }
} else {
    include 'pages/cv.php';
    $_SESSION['countViewPage'] = $_SESSION['countViewPage'] + 1;
}