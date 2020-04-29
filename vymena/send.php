<?php
$to = "matdem1@seznam.cz";
$extra = "From: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Vzkaz od ".$_POST['jmeno']."";
$mess = "Jméno: ".$_POST['jmeno']."\nEmail: ".$_POST['email']."\nWeb: ".$_POST['web']."\nText:\n".$_POST['zprava']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=Hlavni_stranka.html">
<title>Přesměrování...</title>
</head><body></body></html>
