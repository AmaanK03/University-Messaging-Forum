<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

try {
    if (isset($_POST['submit'])) {
        // Update the author's name and email
        updateAuthor($pdo, $_POST['id'], $_POST['name'], $_POST['email']);
        header('Location: user.php'); // Redirect to the author list
        exit();
    } else if (isset($_GET['id'])) {
        // Fetch the author to be edited
        $author = getAuthor($pdo, $_GET['id']);
        $title = 'Edit author';

        ob_start();
        include '../templates/edituser.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
?>
