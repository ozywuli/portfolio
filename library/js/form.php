<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email = $_POST['email'];

    if ( isset($name) && isset($subject) && isset($message) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $test = "/(content-type|bcc:|cc:|to:)/i";
        foreach ($_POST as $key => $val) {
            if (preg_match($test, $val)) {
                exit;
            }
        }

    mail("ozy.wu.li@gmail.com", $subject, $message, "From: " . $email);
    mail($email, "Ozy Wu-Li: Thanks for contacting me. I will get back to you as soon as possible.", $message, "From: ozy.wu.li@gmail.com");

    }

?>