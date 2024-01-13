<?php
$title = 'Internet Joke DataBase';
ob_start();
include 'templates/home.html.php';
$output = ob_get_clean();
include 'templates/homelayout.html.php';