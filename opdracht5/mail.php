<?php
$to = '24316@ma-web.nl';
$subject = $_POST['onderwerp'];
$message = $_POST['bericht'];
$header = 'From: ' . $_POST['afzender'];

mail($to,$subject,$message,$header);
echo '<h1> Mail is verstuurd </h1>';
?>