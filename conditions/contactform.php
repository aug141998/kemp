<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

$name = htmlspecialchars($_POST['name']);
$mailFrom = htmlspecialchars($_POST['mail']);
$message = htmlspecialchars($_POST['message']);


$mailTo = "wasabi4@yahoo.com";

$headers = "SITZPINKLER--contact--FORM";


$txt = "NAME:  $name\n\n EMAIL:  $mailFrom\n\n MESSAGE:  $message";




mail($mailTo, $headers, $txt);
header("Location: https://www.rtbranddesign.com/pages/thank-you-contact.html");
}








