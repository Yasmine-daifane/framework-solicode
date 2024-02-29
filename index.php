<?php


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$pageTitle = '';
$pageContent = '';

switch ($page) {
    case 'home':
        $pageTitle = 'Home';
        $pageContent = 'hey solicoders!';
        break;
    case 'about':
        $pageTitle = 'About Us';
        $pageContent = ' hussein.';
        break;
    case 'contact':
        $pageTitle = 'Contact Us';
        $pageContent = 'Contact yasmine.';
        break;
    default:
        header('Location: index.php?page=home');
        exit();
}

include 'template.php';
