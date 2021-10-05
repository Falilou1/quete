<?php
$firstName = $_POST['user_firstname'];
$name = $_POST['user_name'];
$phonenumber = $_POST['user_number'];
$courriel = $_POST['user_email'];
$option = $_POST['option'];
$message = $_POST['user_message'];


echo  "Merci $firstName $name de nous avoir contacté à propos de $option.

Un de nos conseiller vous contactera soit à l’adresse $courriel ou par téléphone au $phonenumber dans les plus brefs délais pour traiter votre demande : 

$message";
