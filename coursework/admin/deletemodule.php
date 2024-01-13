<?php

try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';

    $sql = "DELETE FROM category WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']); // Correctly formatted
    $stmt->execute();
    
    header('Location: modules.php');
    exit(); // Make sure to exit after sending the header
} catch (PDOException $e) { // Corrected the exception name
    $title = 'An error has occurred';
    $output = 'Unable to delete category: ' . $e->getMessage();
    // The output should be displayed to the user or logged
}

include '../templates/admin_layout.html.php';
?>
