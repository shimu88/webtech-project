<?php
$to="ashifraianar1122@gmail.com";
// $to="khalidurmilu@gmail.com";
$subject="Email from News Portal Website";

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$headers .="Content-type:text/html;\r\n";
$headers .="From: $email";

mail($to,$subject,$comment,$headers);
echo "Email has been sent! Thank you $name";
?>