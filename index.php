<?php

switch ($_GET['pages']) {
    case 'hobby':
        include 'hobby.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include 'cv.php';
        break;
}