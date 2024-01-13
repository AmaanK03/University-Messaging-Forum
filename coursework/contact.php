<?php 
if (isset($_POST['message'])){
    
    $title = "contact us";
    $message = $_POST['message'];

    ini_set("SMTP", "smtp.gre.ac.uk");
    ini_set("sendmail_from", "ak5919x@gre.ac.uk");
    mail("ak5919x@gre.ac.uk", "mail test", $message);
    $output = "<div class='fade-in'>Thank you for your message we will get back to you shortly!</div>";
} else {
    $title = "contact us";
    ob_start();
    include 'templates/mailform.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';