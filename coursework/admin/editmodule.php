<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

try {
    if (isset($_POST['categoryName'])) {
     
        updateCategory($pdo, $_POST['id'], $_POST['categoryName']);
        header('location: modules.php'); 
    } else {
       
        $category = getCategory($pdo, $_GET['id']);
        $title = 'Edit category';

        ob_start();
        include '../templates/editmodule.html.php'; 
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Error editing category: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
?>
