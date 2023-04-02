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
$mail->Host = 'smtp.gmail.com';

/* smtp debug - teszteleshez hiba eseten*/
$mail->SMTPDebug = 2;

/* enable smtp authentication */
$mail->SMTPAuth = true;

/* set type of encryption ssl/tls */
$mail->SMTPSecure = "tls";

/* set port to smtpserve */
$mail->Port = "587";

/* set gmail username */
$mail->Username = 'levelkuldoemail@gmail.com';

/* set gmail password */
$mail->Password = 'LevelKuldoJelszava';

/* set email subject */
$mail->Subject = 'PHPMailer GMail SMTP test';

/* set sender email */
$mail->setFrom('levelkuldoemal@gmail.com', 'NGCms tartalomkezelő');

/* email body */
$mail->Body = 'Sima plan text email';

/* add recipient */
$mail->addAddress('nemess@vhol.hu', 'Nemes Attila');

/* send email */
if ($mail->Send()){
    echo "Email elküldve!";
}else{
    print error_reporting(E_ALL);
    echo "Problema az Email küldésekor!";

}

/* closing smtp connection */
$mail->smtpClose();

?>