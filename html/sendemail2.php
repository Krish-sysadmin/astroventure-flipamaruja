<?php


use PHPMailer\PHPMailer\PHPMailer;

require_once '/usr/share/nginx/html/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '/usr/share/nginx/html/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once '/usr/share/nginx/html/vendor/phpmailer/phpmailer/src/Exception.php';


if (array_key_exists('email', $_POST)) {
        if ($_POST['code'] === 'IT8814220123') {
        //PHPMailer Object
$mail = new PHPMailer;
$name = $_POST['name'];
$email = $_POST['email'];
$message = 'Su garantía se adjunta a continuación:';
$subject = 'Tu garantía para IdeArt';
$subjects .= "Content-Type: text/html; charset=utf-8\r\n";

//Set smtp
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
// $mail->SMTPDebug = 3;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
 $mail->SMTPSecure = "tls";
$mail->Port = 587;

//Credentials
$mail->Username = 'ideartespana@gmail.com';
$mail->Password = '^.e4GHdY3,f>%5BM';

//From email address and name
$mail->From = 'ideartespana@gmail.com';
$mail->setFrom('ideartespana@gmail.com', 'IdeArt Espana');
$mail->FromName = 'IdeArt Espana';

//To address and name
$mail->addAddress($email, $name);

//Address to which recipient will reply
$mail->addReplyTo('ideartespana@gmail.com', 'IdeArt Espana');

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = "Hola, " . $name . "<br>" . $email . "<br>" . $subject . "<br>" . $message . "<br><br><br>";
$attachment = '/usr/share/nginx/html/STEAMIT GARANTIA.pdf';
$mail->AddAttachment($attachment , 'STEAMIT GARANTIA.pdf');

//Made this in contact for
//
//Made this in the contact form
//if(!$mail->send()){
  //      echo "<script type=\"text/javascript\">window.alert('No expedido');window.location.href = '/index.html';</script>";
//}
if(!$mail->send()){
//        echo "<script type=\"text/javascript\">window.alert('Not sent, Error: ".$mail->ErrorInfo."');window.location.href = '/index.html';</script>";


}  else {
 $fp = fopen('/usr/share/nginx/html/thefile.csv', 'a');

        if(fputcsv($fp, array($email)) === FALSE) { $append = 'Write failure. Wrote '.$email.' to csv.'; } else { $append = 'Write success'; };

fclose($fp);
        echo "<script type=\"text/javascript\">window.alert('Sent, success.');window.location.href = '/index.html';</script>";


	echo "<script type=\"text/javascript\">window.alert('Expedido. Por favor revise su bandeja de entrada.');window.location.href = '/index.html';</script>";;
	// smessage

}

 //echo "<script type=\"text/javascript\">window.alert('Expedido. Por favor revise su bandeja de entrada.');window.location.href = '/index.html';</script>";
	}
	else {
    echo "<script type=\"text/javascript\">window.alert('Codigo erroneo');window.location.href = '/index.html';</script>";
   exit;

    }
        }
?>
