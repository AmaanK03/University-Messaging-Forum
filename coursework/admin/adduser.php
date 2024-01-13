<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

$title = 'Add Author'; // Define a title for the add author page

// Start output buffering
ob_start();

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'])) {
        addAuthor($pdo, $_POST['name'], $_POST['email']);
        header('Location: user.php');
        exit();
    } else {
        // The form for adding an author should be displayed
        include '../templates/addusers.html.php'; // Ensure this file exists and is in the correct path
    }
} catch (PDOException $e) {
    $output = 'Database error: ' . $e->getMessage(); // Set $output on error
}

// Get the buffer content
$output = ob_get_clean();

include '../templates/admin_layout.html.php'; // Include the layout template
?>
