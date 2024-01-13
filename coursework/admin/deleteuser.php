<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        deleteAuthor($pdo, $_POST['id']);
        header('Location: user.php');
        exit();
    } else {
        throw new Exception('This operation can only be performed via POST');
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Unable to delete author: ' . $e->getMessage();
    // Include your error handling/layout here
}

include '../templates/admin_layout.html.php'?>
