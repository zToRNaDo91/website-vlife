<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
$message = $_POST["message"];
$email = $_POST["email"];
$sujet = $_POST["subject"];
$nom = $_POST["name"];
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    // 0 = off (for production use, No debug messages)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug  = 0; 
	$mail->isSMTP();                                            // Send using SMTP
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('fr','PHPMailer/language/');
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vlifeheberg@gmail.com';                     // SMTP username
    $mail->Password   = 'n5J4baVK4';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('vlifeheberg@gmail.com', 'vLife');
    $mail->addAddress('vlife.gmod@gmail.com');     // Add a recipient
    $mail->addReplyTo($email, 'Expéditeur');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Contact - '. $sujet;
	$mail->Body    = 'Nom : '.$nom. '<br> Email : '.$email.'<br> Message : '.$message.'<br>' ;
    $mail->AltBody = '';
	$mail->AltBody .= 'Nom:';
	$mail->AltBody .= $nom;
	$mail->AltBody .= '\n';
	$mail->AltBody .= 'Email: ';
	$mail->AltBody .= $email;
	$mail->AltBody .= '\n';
	$mail->AltBody .= 'Message: ';
	$mail->AltBody .= $message;
	$mail->AltBody .= '\n';

    $mail->send();
	echo '<script> $("#message").removeClass("error-message").addClass("sent-message");</script>';
    echo 'Votre message a bien été envoyé.';
} catch (Exception $e) {
     echo "Oups il y a eu un problème <br> {$mail->ErrorInfo}";
}
?>