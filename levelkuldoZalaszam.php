<?php

/* include phpmailer files */
require 'includes/Exception.php';
require 'includes/SMTP.php';
require 'includes/PHPMailer.php';

/* define name spaces */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* create instance of phpmailer */
$mail = new PHPMailer();

/* set mailer to use smtp */
$mail->isSMTP();

/* define smtp host */
$mail->Host = 'mail.zalaszam.hu';

/* smtp debug - teszteleshez hiba eseten*/
$mail->SMTPDebug = 2;

/* enable smtp authentication */
$mail->SMTPAuth = true;

/* set type of encryption ssl/tls */
$mail->SMTPSecure = "tls";

/* set port to smtpserve */
$mail->Port = "587";

/* set gmail username */
$mail->Username = 'felhasznalo@zalaszam.hu';

/* set gmail password */
$mail->Password = 'Jelszo';

/* set email subject */
$mail->Subject = 'PHPMailer zalaszam SMTP test';

/* set sender email */
$mail->setFrom('vki@zalaszam.hu', 'NGCms tartalomkezelő');

/* enables HTML */
$mail->isHTML(true);

/* add attachment*/
$mail->addAttachment("images/zmkik-logo.png");

/* email body */
$mail->Body = '<h3>Ez html elem</h3><br> Sima plan text email';

/* add recipient */
$mail->addAddress('nemcsics@zalaszam.hu', 'Nemes Attila');

/* send email */
if ($mail->Send()){
    echo "Email elküldve!";
}else{
    echo "Problema az Email küldésekor!";

}

/* closing smtp connection */
$mail->smtpClose();

?>