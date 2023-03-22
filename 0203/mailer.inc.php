<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host;
    $mail->SMTPAuth = true;
    $mail->Username = 'pedro.eduardo177@gmail.com';

    $mail->SMTPSecure = PHPMailer::ENCRUPTION_SMTPS;
    $mail->Port = 465;
