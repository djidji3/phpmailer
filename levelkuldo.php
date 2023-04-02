<?php

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer();
/* smtp-t fogok hasznalni */
$mail->IsSMTP();
$mail->Host = "stmp.gmail.com";
$mail->SMTPDebug = 1 ; //teszteles idejere (hibak es uzenetek)
$mail->SMTPAuth = true; //hasznaljon smtp authentikaciot
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Username = "gipsz.jakab@gmail.com" ;
$mail->Password = "juliska" ;
$mail->CharSet = "utf-8";
$mail->setFrom("gipsz.jakab@gmail.com, Küldö Neve") ;
$mail->addReplyTo("gipsz.jakab@gmail.com, Küldö Neve"); // ki kapja az esetleges valaszlevelet
$mail->AltBody = "Az üzenet megtekeintéséhez használj html kompatibiles levelezőt"; //ha nem tudja megnyitni a html uzenetet,akkor ezt irja ki
$mail->AddAddress("valakinek@freemail.hu", "Személy Neve") ; // akinek kuldjuk a levelet
$mail->Subject = "Levél tárgya";
$mail->MsgHTML("$level_torzse_htmlben") ;

header("Content-type: text/html; charset=utf-8");
print ($mail->Send()) ? "Sikertelen levelküldés" : "Sikeres levélküldés";
?>
