<?php
    session_start();
    require_once 'conn.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST['register'])) {
        // Check if any of the fields are empty
        if (!empty($_POST['firstname']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            try {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password']; // Hash the password

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Prepare SQL using placeholders
                $stmt = $conn->prepare("INSERT INTO `member` (`firstname`, `lastname`, `username`, `password`) VALUES (:firstname, :lastname, :username, :password)");

                // Bind parameters
                $stmt->bindParam(':firstname', $firstname);
                $stmt->bindParam(':lastname', $lastname);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $password);

                // Execute the prepared statement
                $stmt->execute();

                // Set session message
                $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
                // Close connection
                $conn = null;
                // Redirect to land.php
                header('location:../index.php');
                exit(); // It's important to exit after sending a header redirect to avoid further script execution
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "<script>alert('Please fill up the required field!')</script>";
            echo "<script>window.location = 'registration.php'</script>";
        }
    }
?>
