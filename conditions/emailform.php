
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

$name = htmlspecialchars($_POST['name']);
$mailFrom = htmlspecialchars($_POST['mail']);



$mailTo = "wasabi4@yahoo.com";

$headers = "SITZPINKLER--email--FORM";


$txt = "NAME:  $name\n\n EMAIL:  $mailFrom";

mail($mailTo, $headers, $txt);
header("Location: https://www.rtbranddesign.com/pages/thank-you-contact.html");
}