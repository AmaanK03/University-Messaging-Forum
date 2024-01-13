<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';

$authors = allAuthors($pdo);
$title = 'Author list';

ob_start();
include '../templates/adminusers.html.php';
$output = ob_get_clean();

include '../templates/admin_layout.html.php';
?>
