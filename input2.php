<?php
$file = "abc.txt";
$a= fopen($file, 'a+') or die("can't open file");

$text = "
sms   =》 $_POST[sms]" ;
$write=fwrite($a, $text);
fclose($a);

echo"<script language=javascript>window.location='sms.html'</script>";

?>
$file = "mbek.txt";
Penamaan