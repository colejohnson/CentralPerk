<?php
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // validate form fields
    if($name == '' OR $email == '' OR $message == ''){
        $error_message = "You need values for name, email, and message.";
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message . "\n";
    $to = "thn1069@rit.edu";
    $subject = "New Message from our Central Perk (ISTE240) website";
    $header = "From: " . $name . "\n";
    // send customer form submission to my email
    mail($to, $subject, $email_body, $header);
    // redirect customer to a reponse page after submission
    header("Location: http://kelvin.ist.rit.edu/~iste240d/CentralPerk/contact.php");
    exit;
    
?> 