<?php
    $db_username = 'ak5919x';
    $db_password = 'ak5919x';
    $conn = new PDO('mysql:host=mysql.cms.gre.ac.uk;dbname=mdb_ak5919x', $db_username, $db_password);
    if(!$conn){
        die("Fatal Error: Connection Failed!");
    }
?>
