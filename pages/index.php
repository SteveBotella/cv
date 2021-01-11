<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/hobby':
        include 'hobby.php';
        break;
    case '/contact':
        include 'contact.php';
        break;
    default:
        include 'cv.php';
        break;
}