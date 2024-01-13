<?php

try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteJoke($pdo, $_POST['id']);
    header('location: questions.php');
}catch(PDOExeption $e){
    $title = 'An error has occured';
    $output = 'Unable to connect to delete joke:'.$e->getMessage();
}

include '../templates/admin_layout.html.php';