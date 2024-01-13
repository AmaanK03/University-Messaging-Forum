<?php
if (isset($_POST['categoryName'])) {
    try {
        include '../includes/DatabaseConnection.php'; 
        include '../includes/DatabaseFunctions.php'; 

        addCategory($pdo, $_POST['categoryName']);
        header('Location: modules.php'); 
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
        include '../templates/admin_layout.html.php'; 
        exit();
    }
} else {
    $title = 'Add a new category';
    ob_start();
    include '../templates/addmodule.html.php'; 
    $output = ob_get_clean();
    include '../templates/admin_layout.html.php'; 
}
?>
