<?php
try {
    include '../includes/DatabaseConnection.php'; 
    include '../includes/DatabaseFunctions.php'; 

    $categories = allCategories($pdo);
    $title = 'Category list';
    $totalCategories = totalCategories($pdo);

    ob_start();

    include '../templates/adminmodules.html.php'; 

    $output = ob_get_clean();

} catch (PDOException $e) {
   
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine();
}


include '../templates/admin_layout.html.php'; 
?>
