<?php
$to = 'bizoi.cristina95@gmail.com';
$subject = 'mesaj portofoliu';
$message = 'Ai primit de la: '.$_POST["name"].' cu adresa de mail '.$_POST["email"].' urmatorul mesaj: '.$_POST["message"];
$headers = 'From: no-reply@cristinabizoi.ro'. "\r\n".
'Reply-To: no-reply@cristinabizoi.ro'. "\r\n".
'X-Mailer: PHP/'.phpversion();
mail($to, $subject, $message, $headers);
session_start();
$_SESSION["message"] = true;
header('Location:./');

?>