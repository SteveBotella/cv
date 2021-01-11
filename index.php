<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
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
            include '';
    }
} else {
    include 'pages/cv.php';
}