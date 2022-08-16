<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Tel: $telefoonnummer \n Message: $message";
    $recipient = "yourmail@mail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";

    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
