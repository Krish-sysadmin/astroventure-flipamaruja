<?php //PHPMailer Object

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';



$mail = new PHPMailer;

$mail->isSMTP();                                    // Send using SMTP
$mail->Host       = 'smtp.gmail.com';               // Set the SMTP server to send through
$mail->SMTPAuth   = true;                           // Enable SMTP authentication
$mail->Username   = 'ideartespana@gmail.com';               // your SMTP username
$mail->Password   = 'eq9ypaKY6waBcZM';          // your SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                            // TCP port to connect to, use 465 for


//From email address and name
$mail->From = "ideartespana@gmail.com";
$mail->FromName = "Ideart espana";

//To address
$mail->addAddress("puneet.jain@aol.in");

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Message autosended using PHP<i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    if ($mail->send() === true) {
  echo "Success!";
} else {
  echo "Did not send :(";
}
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
} 
?>
