<?php
$_SESSION['dateFirstVisit'] = date('_Y-m-d-H-i-s');
$raw_url = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
if (isset($raw_url)) {
    switch ($raw_url) {
        case 'hobby':
            include 'pages/hobby.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        case 'cv':
            include 'pages/cv.php';
            break;
        default:
            include 'pages/404.php';
    }
} else {
    include 'pages/cv.php';
}