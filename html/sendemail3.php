 <?php


use PHPMailer\PHPMailer\PHPMailer;

require_once '/var/www/html/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '/var/www/html/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once '/var/www/html/vendor/phpmailer/phpmailer/src/Exception.php';

if (array_key_exists('email1', $_POST)) {
        if ($_POST['code1'] === 'CAT821929A') {
        //PHPMailer Object
$mail = new PHPMailer;
$name = $_POST['name1'];
$email = $_POST['email1'];
$message = 'Votre coupon est joint ci-dessous::';
$subject = 'Votre coupon est joint ci-dessous:';


//Set smtp
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;

//Credentials
$mail->Username = 'ideartespana@gmail.com';
$mail->Password = 'eq9ypaKY6waBcZM';

//From email address and name
$mail->From = $mail;
$mail->setFrom($mail, 'IdeArt Espana');
$mail->FromName = 'IdeArt Espana';

//To address and name
$mail->addAddress($email, $name);

//Address to which recipient will reply
$mail->addReplyTo($mail, 'IdeArt Espana');

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = "Salut, " . $name . "<br>" . $email . "<br>" . $subject . "<br>"  . "<br><br><br>";
$attachment = '/var/www/html/COUPONSTRASBOURG.pdf';
$mail->AddAttachment($attachment , 'COUPON STRASBOURG.pdf');

//Made this in contact for
//
//Made this in the contact form
if(!$mail->send()){
        echo "<script type=\"text/javascript\">window.alert('No expedido');window.location.href = '/index.html';</script>";
} else {
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
