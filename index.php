<?php
if (isset($_GET)==false) {
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
            include '/404.jpg';
    }
} include 'pages/cv.php';