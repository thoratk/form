<?php

$surname=$_POST['surname'];
$firstname=$_POST['firstname'];
$subject=$_POST['subject'];
$mail=$_POST['mail'];
$phone=$_POST['phone'] ;
$message = $_POST['message'];
echo "Merci $firstname $surname de nous avoir contacté à propos de \"$subject\".<br><br>";
echo "Un de nos conseillers vous contactera soit à l’adresse $mail ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : <br><br>";
echo $message;




