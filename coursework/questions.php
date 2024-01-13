<?php
try {
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';

    $jokes = allJokes($pdo);
    $title = 'Joke list';
    $totalJokes = totalJokes($pdo);

    ob_start();
    include 'templates/questions.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {

    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine();
}
include 'templates/layout.html.php';
?>
