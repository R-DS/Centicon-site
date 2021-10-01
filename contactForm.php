<?php
// include required phpmailer files
    require 'phpmailer/include/PHPMailer.php';
    require 'phpmailer/include/SMTP.php';
    require 'phpmailer/include/Exception.php';
    header(Location: 'index.html');

// Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

// Create instanceof phpmailer
    $mail = new PHPMailer();

// Set mailer to use smtp
    mail->isSMTP();
// define smtp host
    $mail->Host = "smtp.gmail.com";
// enable smtp authentication
    $mail->AMTPAuth = "true";
// set type of encryption (ssl/tls)
    $mail->SMTPSecure = "tls";
// set prt to connect smtp
    $mail->Port = "587";
// set email username
    $mail->Username = '';
// set email password
    $mail->Password = "";
// set email subject
    $mail->Subject = "Test email using PHPMailer";
//Set sender email
    $mail->setFrom("");
// Email body
    $mail->Body = "This is plain text email body";
// Add recipient
    $mail->addAddress("");
// Finally send email
    if ($mail->Send()){
        echo "Email sent successfully";
    } else {
        echo "Error.! Please try again";
    }
// Closing smtp connection
    $mail->smtpClose();
?>